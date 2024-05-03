<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Login' => null
        ];

        return view('auth.login', compact('breadcrumbs'));
    }
}
