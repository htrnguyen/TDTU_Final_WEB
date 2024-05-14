<?php

namespace App\Route;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Admin 
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCouponController;
use App\Http\Controllers\Admin\AdminTaskListController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSessionController;

// Client
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MailController;
use App\Http\Controllers\Client\MenController;
use App\Http\Controllers\Client\WomenController;
use App\Http\Controllers\Client\KidsController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\SaleController;

// Auth
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\auth\PasswordController;


Route::group(['namespace' => 'auth'], function () {
    // Login
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.submit');
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
    Route::delete('/delete', [RegisterController::class, 'destroy']);

    // Reset-password
    Route::get('/password/forgot', [PasswordController::class, 'index'])->name('forgot-password');
    Route::post('/password/forgot', [PasswordController::class, 'forgot'])->name('password.forgot.submit');
    Route::get('/password/reset', [PasswordController::class, 'edit'])->name('reset-password');
    Route::patch('/password/reset', [PasswordController::class, 'reset'])->name('password.reset');
    Route::post('/password/change', [PasswordController::class, 'update'])->name('password.change');

    // Change-password
    Route::get('/profile/change-password', [PasswordController::class, 'changePassword'])->name('change-password');
});

Route::group(['namespace' => 'client'], function () {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/men', [MenController::class, 'index'])->name('men');
    Route::get('/women', [WomenController::class, 'index'])->name('women');
    Route::get('/kids', [KidsController::class, 'index'])->name('kids');

    // Sale
    Route::get('/sale', [SaleController::class, 'index'])->name('sale');

    // Cart 
    Route::get('/carts', [CartController::class, 'index'])->name('cart');
    Route::post('carts/{id}', [CartController::class, 'store'])->name('cart.add')->middleware('auth');
    Route::delete('carts/{id}', [CartController::class, 'destroy'])->name('cart.delete')->middleware('auth');

    // Checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.submit');

    //Search
    Route::get('/search', [SearchController::class, 'search'])->name('search');

    // Mailing
    Route::get('email/verify', [MailController::class, 'verify']);
    Route::get('test-reset-password', [MailController::class, 'resetPassword']);

    // Profile
    Route::get('/{username}', [AccountController::class, 'index'])->name('profile');
    Route::patch('/profile/avatar', [AccountController::class, 'updateAvatar'])->name('account.avatar.update');
    Route::patch('/profile/info', [AccountController::class, 'update'])->name('account.info.submit');
    Route::delete('/profile/delete/{username}', [AccountController::class, 'destroy'])->name('account.delete')->middleware('auth');

    // View Product details
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.product-detail');
});


Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    // Login
    Route::get('/login', [AdminSessionController::class, 'index'])->name('login_admin');
    Route::post('/login', [AdminSessionController::class, 'store'])->name('submit.login_admin');

    // Route::middleware(['admin'])->group(function () {
        // Home
        Route::get('/home', [AdminController::class, 'index'])->name('home_admin');

        // Product
        Route::get('/product', [AdminProductController::class, 'index'])->name('product_admin');
        Route::get('/product/create', [AdminProductController::class, 'productCreate'])->name('createproduct_admin');
        Route::get('/product/orderproduct', [AdminProductController::class, 'productOrder'])->name('orderproduct_admin');
        Route::post('/product/create', [AdminProductController::class, 'store'])->name('submit.createproduct');

        // Counpon
        Route::get('/coupon', [AdminCouponController::class, 'index'])->name('coupon_admin');

        // Task List
        Route::get('/tasklist', [AdminTaskListController::class, 'index'])->name('tasklist_admin');

        // Customer
        Route::get('/customer', [AdminCustomerController::class, 'index'])->name('customer_admin');

    // Setting
    Route::get('/setting', [AdminSettingController::class, 'index'])->name('setting_admin');

    // Login
    // Route::get('/login', [AdminLoginController::class, 'index'])->name('login_admin');

});

// Use this api to check if server health is good or not
Route::get('check-health', function () {
    return response()->json(['message' => 'Call URI from web'], Response::HTTP_OK);
});
