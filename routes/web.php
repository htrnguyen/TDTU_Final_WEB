<?php
namespace App\Route;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/client/home');
});