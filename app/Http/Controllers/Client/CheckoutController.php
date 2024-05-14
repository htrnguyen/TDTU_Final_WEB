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
        dd('checkou');
        $attributes = request()->validate([
            'shipping_address' => 'required|string',
            'phone_number' => 'required|string',
            'note' => 'nullable|string',

        ]);
        dd($attributes);

        if (!$attributes) {
            return redirect()->back()->with('error', 'Please enter shipping address and phone number');
        }

        $user = User::find(Auth::user()->id);


        $order = Order::create([
            'user_id' => $user->id,
            'shipping_address' => $attributes['shipping_address'],
        ]);
        

        // $user->notify(new PaymentSuccessfullyEmailNotification($user));
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
