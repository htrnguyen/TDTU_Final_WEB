<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Women' => null
        ];

        $products = Product::where('category_id', '2')->paginate(12);

        return view('client.women', compact('breadcrumbs', 'products'));
    }
}
