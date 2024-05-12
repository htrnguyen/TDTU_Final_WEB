<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;


class MenController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Men' => null
        ];

        $products = Product::where('category_id', '1')->paginate(12);

        return view('client.men', compact('breadcrumbs', 'products'));
    }
}
