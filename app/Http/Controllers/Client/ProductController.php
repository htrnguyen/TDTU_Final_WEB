<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showMenPage() {
        $products = Product::all(); 

        return view('client.men', ['products' => $products]);
    }
}
