<?php

namespace App\Route;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenController;


Route::get('/', function () {
    return view('client.home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/men', [MenController::class, 'index'])->name('men.index');
