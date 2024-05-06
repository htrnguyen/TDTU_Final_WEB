<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // TODO: Catch exception
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


        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match our records.',
            ]);
        };

        return response()->json([
            'message' => 'Login successfully',
            'data' => $credentials,
        ]);

        // TODO: Pre-request script to fecth in postman and fix password hashing issue


        //regenerate the session token
        // request()->session()->regenerate();

        // //redirect
        // return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('client.home');
    }
}
