<?php
namespace App\Route;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

// Route::view('/', 'client.home');

Route::controller(UserController::class)->group(function() {

    Route::post('/login', 'store');
    Route::get('/getUsers', 'index');
});

Route::get('check-health', function() {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});

