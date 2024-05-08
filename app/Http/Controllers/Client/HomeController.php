<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Welcome to the home page!',
            'status' => 'success',
        ]);
    }
}
