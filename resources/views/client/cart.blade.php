@extends('layouts.client')
@section('title', 'Shoe Store Home')
@section('content')
<div class="container mt-4 mb-5 px-5">
    @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
    <div class="cart page-width">
        <div class="cart-page-top"></div>
        <div class="cart-page-middle">
            <div class="row">
                {{-- Column Shopping Cart --}}
                @if ($productDetails && count($productDetails) > 0)
                <div class="col-md-8">
                    <div id="shopping-cart-items">
                        <table class="table table-borderless">
                            <thead class="border-bottom">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productDetails as $index => $productDetail)
                                @component('cart-product-card', ['productDetail' => $productDetail])
                                @endcomponent
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        <p class="fw-bold">Promotion code?</p>
                        <form id="couponForm" action="#" method="POST" class="form-inline d-flex justify-content-between">
                            <div class="input-group mb-2 w-50">
                                <input type="text" class="form-control" name="coupon" placeholder="Enter coupon code" value="">
                                <div class="input-group-append  ms-3">
                                    <button type="button" class="btn btn-secondary m-auto">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Column Checkout --}}
                <div class="col-md-4 px-5">
                    <div class="card border-0">
                        <h4 class="card-title">Order summary</h4>
                        <hr>
                        <p class="card-text">Sub total: $ {{ $total }}</p>
                        <p class="card-text">Total: $1,129.00</p>
                        <a href="/checkout" class="btn btn-secondary w-100">CHECKOUT</a>
                    </div>
                </div>
                @else
                <div class="text-center">
                    <p class="h3">Your cart is empty</p>
                    <a href="{{ route('home') }}" class="btn btn-dark">Go shop here</a>
                </div>
                @endif
            </div>
        </div>
        <div class="cart-page-bottom"></div>
    </div>
</div>


@endsection