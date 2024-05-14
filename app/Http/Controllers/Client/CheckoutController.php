<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Notifications\PaymentSuccessfullyEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Checkout' => null
        ];

        $user = User::find(Auth::user()->id);
        $carts = $user->carts;
        $total = $user->getTotalPrice();
        $discountPrice = 0;

        $productDetails = [];
        foreach ($carts as $index => $cart) {
            array_push($productDetails, $cart->getFullProductInformation());
        }

        return view('client.checkout', compact('breadcrumbs', 'productDetails', 'total', 'discountPrice', 'user'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'shipping_address' => 'string',
            'phone_number' => 'string',
            'note' => 'nullable|string',
            'shipping_method' => 'string',
            'payment_method' => 'string',
            'products' => 'string',
            'total' => 'integer'
        ]);
        $attributes['products'] = json_decode($attributes['products']);


        if (!$attributes) {
            return redirect()->back()->with('error', 'Please fill in all field');
        }

        $user = User::find(Auth::user()->id);
        $user->notify(new PaymentSuccessfullyEmailNotification($user, $attributes));

        return redirect()->back()->with('message', 'Payment successfully. Please check your email to view bill detail');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $userId = Auth::user()->id;
        $orders = Order::where('user_id', $userId)->get();
    
        foreach ($orders as $order) {
            $order->products = $order->products()->get();
        }
    
        return view('orders.index', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy()
    {
    }
}
