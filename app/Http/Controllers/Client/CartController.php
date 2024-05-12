<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Shopping cart' => null
        ];

        return view('client.cart', compact('breadcrumbs'));
    }

    public function store($id)
    {
        dd($id);
    }

    public function destroy($id)
    {
        //
    }

    public function update()
    {
        //
    }

    public function add($product_id)
    {
        // Get the product from sku or id
    }

}
