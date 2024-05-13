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
        // $productDetailIds = $user->getProductDetailIds();
        // $productDetails = ProductDetail::whereIn('id', $productDetailIds)->get();


        $carts = $user->carts;

        $productDetails = [];

        foreach ($carts as $index => $cart) {
            array_push($productDetails, $cart->getFullProductInformation());
        }

        // dd($productDetails);

        return view('client.cart', compact('breadcrumbs', 'productDetails'));
    }

    public function store($id)
    {
        $product = Product::find($id);
        $productDetail = ProductDetail::find($id);
        $userId = Auth::user()->id;

        // Check if the product detail already exists in the user's cart
        $existingCart = Cart::where('user_id', $userId)
            ->where('product_detail_id', $productDetail->id)
            ->first();

        if ($existingCart) {
            // If the product detail exists in the cart, increase the quantity
            $existingCart->increment('quantity');
            $cart = $existingCart;
        } else {
            // Otherwise, create a new cart item
            $cart = Cart::create([
                'user_id' => $userId,
                'product_id' => $product->id,
                'product_detail_id' => $productDetail->id,
                'quantity' => 1,
            ]);
        }

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
