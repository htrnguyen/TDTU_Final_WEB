<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $product_name = $product->name;

        $breadcrumbs = [
            'Home' => route('home'),
            'Product' => null,
            $product_name => null
        ];

        return view('client.product-detail', compact('breadcrumbs', 'product'));
    }
}
