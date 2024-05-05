<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Create an account' => null
        ];

        return view('auth.register', compact('breadcrumbs'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        User::create($attributes);

        response()->json([
            'success' => true,
            'data' => $attributes
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function update() {
        
    }

    public function destroy()
    {
        $user = Auth::user();
        // User::destroy($user->id);

        dd($user);

        // Optionally, logout the user after deletion
        Auth::logout();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
