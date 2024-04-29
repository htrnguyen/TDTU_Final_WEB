<?php
namespace App\Route;

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'Hello world'
    ]);
});