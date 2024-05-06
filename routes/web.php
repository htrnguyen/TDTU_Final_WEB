<?php

namespace App\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Models\User;

Route::group(['namespace' => 'auth'], function () {

    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/logout', [LoginController::class, 'destroy']);


    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::delete('/delete', [RegisterController::class, 'destroy']);
    Route::get('email/verify', [MailController::class, 'verify']);


    // Auth::


    // Reset-password
    Route::get('/reset-password', [PasswordController::class, 'index'])->name('reset-password');
    Route::post('/reset-password', [PasswordController::class, 'reset'])->name('reset-password');
    Route::post('/password/update', [PasswordController::class, 'update']);

    // Cart 
    Route::get('/cart', [CartController::class, 'index'])->name('cart');    
});



Route::get('/men', [MenController::class, 'index'])->name('men');

Route::get('/men/show', [ProductController::class, 'showMenPage'])->name('men.products');

Route::view('/', 'client.home')->name('home');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('check-health', function () {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home_admin');


    Route::get('/product', [AdminProductController::class, 'index'])->name('product_admin');
    Route::get('/product/createproduct', [AdminProductController::class, 'productCreate'])->name('createproduct_admin');
    Route::get('/product/orderproduct', [AdminProductController::class, 'productOrder'])->name('orderproduct_admin');
    Route::post('/product/createproduct', [AdminProductController::class, 'store']);
});

