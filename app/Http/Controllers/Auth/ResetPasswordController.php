<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Reset password' => null
        ];

        return view('auth.reset-password', compact('breadcrumbs'));
    }
}
