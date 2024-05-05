<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminCreateProductController extends Controller
{
    // This method will return the view for creating a product
    public function index()
    {
        return view('admin.createProduct');
    }
}
