<?php

namespace App\Route;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Admin 
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;

// Client
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MailController;
use App\Http\Controllers\Client\MenController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\ProductController;

// Auth
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Client\AccountController;

Route::group(['namespace' => 'auth'], function () {
    // Login
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.submit');
    Route::post('/logout', [SessionController::class, 'destroy']);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::delete('/delete', [RegisterController::class, 'destroy']);

    // Reset-password
    Route::get('/reset-password', [PasswordController::class, 'index'])->name('reset-password');
    Route::post('/reset-password', [PasswordController::class, 'reset'])->name('reset-password');
    Route::post('/password/update', [PasswordController::class, 'update']);

});

Route::group(['namespace' => 'client'], function () {
    //Home
    Route::view('/', 'client.home')->name('home');
    
    // Men
    Route::get('/men', [MenController::class, 'index'])->name('men');
    Route::get('/men/show', [ProductController::class, 'showMenPage'])->name('men.products');
    
    // Women
    
    // Cart 
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    //Search
    Route::get('/search', [SearchController::class, 'search'])->name('search');

    // Mailing
    Route::get('email/verify', [MailController::class, 'verify']);

    // Profile
    Route::get('/profile/{username}', [AccountController::class, 'index'])->name('account.profile');
    Route::delete('/profile/delete/{username}', [AccountController::class, 'destroy'])->name('account.delete')->middleware('auth');

});


Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    // Home
    Route::get('/home', [AdminController::class, 'index'])->name('home_admin');
    
    // Product
    Route::get('/product', [AdminProductController::class, 'index'])->name('product_admin');
    Route::get('/product/createproduct', [AdminProductController::class, 'productCreate'])->name('createproduct_admin');
    Route::get('/product/orderproduct', [AdminProductController::class, 'productOrder'])->name('orderproduct_admin');
    Route::post('/product/createproduct', [AdminProductController::class, 'store']);
    Route::get('/product/show', [AdminProductController::class, 'show']);
    
    // Others feature ...
});

// Use this api to check if server health is good or not
Route::get('check-health', function () {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});