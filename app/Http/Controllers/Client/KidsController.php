<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class KidsController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Kids' => null
        ];

        $products = Product::where('category_id', '3')->paginate(12);

        return view('client.kids', compact('breadcrumbs', 'products'));
    }
}
