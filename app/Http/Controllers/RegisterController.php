<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
