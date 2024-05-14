<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
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

        return view('client.checkout', compact('breadcrumbs', 'productDetails', 'total', 'discountPrice'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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
