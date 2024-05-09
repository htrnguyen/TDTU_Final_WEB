<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserForgotPassword;
use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Models\User;
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
        $email = request()->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Email not found'
            ]);
        }

        event(new UserForgotPassword($user));

        return response()->json([
            'success' => true,
            'message' => 'Redirect to change-password page',
            'data' => $user
        ]);
    }

    public function reset($token) {
        $data = request()->validate([
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
    
    
        $tokenModel = Token::where('token', $token)->first();

        dd($token, $tokenModel, $data);
    
        if (!$tokenModel) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token',
            ], 404);
        }
    
        $user = User::find($tokenModel->user_id);
    
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }
    
        $user->password = Hash::make($data['password']);
        $user->save();
    
        $tokenModel->delete();
    
        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Password reset successfully',
        ]);
    }

    public function update()
    {
        // Validate request data
        $data = request()->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8',
        ]);

        // Retrieve the authenticated user
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();

        // Verify that the old password matches the user's current password
        if (!Hash::check($data['oldPassword'], $user->password)) {
            throw ValidationException::withMessages([
                'oldPassword' => 'The old password is incorrect.',
            ]);
        }

        // Update the user's password
        $user->password = Hash::make($data['newPassword']);
        $user->save();

        return response()->json([
            'message' => 'Password updated successfully.',
        ]);
    }

    public function edit()
    {
        return view('auth.reset-password');
    }
}
