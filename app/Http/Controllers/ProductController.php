<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showMenPage() {
        $products = Product::all(); 

        return view('client.men', ['products' => $products]);
    }
}
