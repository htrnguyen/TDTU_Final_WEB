<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Reset password' => null
        ];

        return view('auth.reset-password', compact('breadcrumbs'));
    }

    public function reset()
    {
        $email = request('email');

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Email not found'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Redirect to change-password page'
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
}
