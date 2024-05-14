<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->take(12)
            ->get();
        if (!$products) {
            return response()->json([
                'message' => 'No products found',
                'status' => 'error',
            ]);
        }

        return view('client.home', ['products' => $products]);
    }
}
