<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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

    public function edit() {
        
    }

    public function update() {

    }
}
