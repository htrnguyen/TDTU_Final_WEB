<?php

namespace App\Route;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Admin 
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCouponController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\AdminTaskListController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminLoginController;

=======
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
>>>>>>> 1c9cfde042b99016d859e78ab5a626a2a70f03d7

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
    Route::get('/forgot-password', [PasswordController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [PasswordController::class, 'reset'])->name('forgot-password');
    Route::post('/password/update', [PasswordController::class, 'update']);

    Route::get('reset-password', [PasswordController::class, 'resetPassword'])->name('reset-password');
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
    Route::get('test-reset-password', [MailController::class, 'resetPassword']);

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

<<<<<<< HEAD
    // Counpon
    Route::get('/coupon', [AdminCouponController::class, 'index'])->name('coupon_admin');

    // Task List
    Route::get('/tasklist', [AdminTaskListController::class, 'index'])->name('tasklist_admin');

    // Customer
    Route::get('/customer', [AdminCustomerController::class, 'index'])->name('customer_admin');

    // Setting
    Route::get('/setting', [AdminSettingController::class, 'index'])->name('setting_admin');

    // Login
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login_admin');

=======
    Route::get('/coupon', [AdminCouponController::class, 'index'])->name('coupon_admin');

    Route::get('/product/show', [AdminProductController::class, 'show']);

    // Others feature ...
>>>>>>> 1c9cfde042b99016d859e78ab5a626a2a70f03d7
});

// Use this api to check if server health is good or not
Route::get('check-health', function () {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});
