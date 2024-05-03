<?php

namespace App\Route;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenController;


// Route::view('/', 'client.home');

Route::controller(UserController::class)->group(function () {

    Route::post('/login', 'store');
    Route::get('/getUsers', 'index');
});

Route::get('check-health', function () {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});

Route::get('/', function () {
    return view('client.home');
})->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/men', [MenController::class, 'index'])->name('men');
