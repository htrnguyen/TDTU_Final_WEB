<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserForgotPassword;
use App\Http\Controllers\Controller;
use App\Listeners\SendResetPasswordEmail;
use App\Models\Token;
use App\Models\User;
use App\Notifications\ResetPasswordEmailNotification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Reset password' => null
        ];

        return view('auth.forgot-password', compact('breadcrumbs'));
    }

    public function forgot()
    {
        $validatedData = request()->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        $user->notify(new ResetPasswordEmailNotification($user));

        return redirect()->back()->with('success', 'Reset password email sent successfully');
    }

    public function reset()
    {
        $data = request()->validate([
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        $tokenModel = Token::where('token', $data['token'])->first();

        // Check if the token exists
        if (!$tokenModel) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token',
            ], 404);
        }

        // Check if the token has expired
        if ($tokenModel->expires_at && $tokenModel->expires_at->isPast()) {
            return response()->json([
                'success' => false,
                'message' => 'Token has expired',
            ], 422);
        }

        $user = User::find($tokenModel->user_id);

        // Check if the user exists
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }

        // Update the user's password
        $user->password = Hash::make($data['password']);
        $user->save();

        $tokenModel->delete();

        return redirect()->route('login')->with('message', 'Reset password successfully');
    }

    public function update()
    {
        // Validate request data
        $data = request()->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Retrieve the authenticated user
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();

        // Verify that the old password matches the user's current password
        if (!Hash::check($data['old_password'], $user->password)) {
            throw ValidationException::withMessages([
                'old_password' => 'The old password is incorrect.',
            ]);
        }

        // Update the user's password
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('profile', $user->username)->with('message', 'Change password successfully');
    }

    public function edit()
    {
        $token = request()->query('token');

        if (!$token) {
            return redirect()->back()->with('error', 'Invalid token.');
        }

        $tokenData = Token::where('token', $token)->first();

        if (!$tokenData) {
            return redirect()->back()->with('error', 'Invalid or expired token.');
        }

        if ($tokenData->isExpired()) { 
            return redirect()->back()->with('error', 'Token has expired.');
        }

        return view('auth.reset-password', ['token' => $token]);
    }


    public function changePassword()
    {
        return view('client.change-password');
    }
}
