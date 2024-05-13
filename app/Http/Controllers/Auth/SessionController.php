<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Login' => null
        ];

        return view('auth.login', compact('breadcrumbs'));
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            // Authentication passed
            request()->session()->regenerate();
            return redirect()->intended();
        }

        // Authentication failed
        throw ValidationException::withMessages([
            'email' => 'Sorry, those credentials do not match our records.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->intended();
    }
}
