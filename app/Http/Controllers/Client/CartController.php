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
        $carts = $user->carts;
        $total = $user->getTotalPrice();

        $productDetails = [];
        foreach ($carts as $index => $cart) {
            array_push($productDetails, $cart->getFullProductInformation());
        }

        return view('client.cart', compact('breadcrumbs', 'productDetails', 'total'));
    }

    public function store($id)
    {
        $attributes = request()->validate([
            'color' => 'required|string',
            'size' => 'required|string'
        ]);

        $product = Product::find($id);
        $productDetail = ProductDetail::where('product_id', $id)
                ->where('color', $attributes['color'])
                ->where('size', $attributes['size'])
                ->first();
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

        return redirect()->intended("product/$productDetail->id")->with('message', 'add product to cart successfully');
    }


    public function destroy($id)
    {
        $cartItem = Cart::where('product_detail_id', $id)
            ->where('user_id', Auth::user()->id)
            ->delete();

        

        return redirect()->route('cart')->with('success', 'Cart item deleted successfully');
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
