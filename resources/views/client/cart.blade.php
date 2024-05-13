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
                                    <tr>
                                        <td class="border-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('images/Jordan.png') }}" alt="Nike air zoom pegasus 35"
                                                    class="img-fluid shadow-lg me-4" width="20%" height="20%">
                                                <div>
                                                    <a href="/men/nike-air-zoom-pegasus-35-143"
                                                        class="font-weight-bold text-decoration-none">Nike air zoom pegasus
                                                        35</a>
                                                    <div>Color: Blue</div>
                                                    <div>Size: 39</div>
                                                    <a type="button" class="btn btn-delete"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0 text-center">$411.00</td>
                                        <td class="border-0 text-center">1</td>
                                        <td class="border-0 text-center">$411.00</td>
                                    </tr>

                                    <tr>
                                        <td class="border-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('images/shoe2.jpg') }}" alt="New Product"
                                                    class="img-fluid shadow-lg me-4" width="20%" height="20%">
                                                <div>
                                                    <a href="/men/new-product"
                                                        class="font-weight-bold text-decoration-none">New Product</a>
                                                    <div>Color: Red</div>
                                                    <div>Size: 38</div>
                                                    <a type="button" class="btn btn-delete"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0 text-center">$500.00</td>
                                        <td class="border-0 text-center">2</td>
                                        <td class="border-0 text-center">$1000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-5">
                            <p class="fw-bold">Promotion code?</p>
                            <form id="couponForm" action="#" method="POST"
                                class="form-inline d-flex justify-content-between">
                                <div class="input-group mb-2 w-50">
                                    <input type="text" class="form-control" name="coupon"
                                        placeholder="Enter coupon code" value="">
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
                            <p class="card-text">Sub total: $1,129.00</p>
                            <p class="card-text">Total: $1,129.00</p>
                            <a href="/checkout" class="btn btn-secondary w-100">CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-page-bottom"></div>
        </div>
    </div>
@endsection
