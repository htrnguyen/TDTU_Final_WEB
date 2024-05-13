<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Shopping cart' => null
        ];

        $user = User::find(Auth::user()->id);
        $productDetailIds = $user->getProductDetailIds();
        $productDetails = ProductDetail::whereIn('id', $productDetailIds)->get();

        return view('client.cart', compact('breadcrumbs', 'productDetails'));
    }

    public function store($id)
    {
        $product = Product::find($id);
        $productDetail = ProductDetail::find($id);
        $userId = Auth::user()->id;

        $cart = Cart::create([
            'user_id' => $userId,
            'product_id' => $product->id,
            'product_detail_id' => $productDetail->id,
            'quantity' => 1,
        ]);

        dd($cart);
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
