{{-- Đang sửa, đừng xoá --}}

{{-- @extends('layouts.client')

@section('content')
    <div class="container mt-4">
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
        <div class="row">
            <div class="col-md-8">
                <h3>Cart</h3>
                @if (session('cart') && count(session('cart')) > 0)
                    @foreach (session('cart') as $id => $details)
                        <div class="card mb-3 mt-3 no-border">
                            <div class="row no-gutters align-items-center ">
                                <div class="col-md-3">
                                    <img src="{{ asset('images/Jordan.png') }}" alt="{{ $details['name'] }}"
                                        style="width: 90%; height: 100%">
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">{{ $details['name'] }}</h5>
                                        <p class="ml-auto" style="font-weight: bold">${{ $details['price'] }}</p>
                                    </div>
                                    <p class="card-text">Quantity: {{ $details['quantity'] }}</p>
                                    <button type="button" class="btn btn-light"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                        Your cart is empty!
                        <a href="{{ url('/') }}" class="alert-link">Continue Shopping</a>
                    </div>
                @endif
            </div>
            <!-- ... -->
        </div>
    </div>
@endsection --}}




@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')

    <div class="container mt-4">
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
        <div class="row">
            <div class="col-md-8">
                <h3>Cart</h3>
                <div class="card mb-3 mt-3 no-border">
                    <div class="row no-gutters align-items-center ">
                        <div class="col-md-3">
                            <img src="{{ asset('images/shoe1-black.jpg') }}" alt="Strutter shoe"
                                style="width: 90%; height: 100%">
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Nike Air Max Pulse</h5>
                                <p class="ml-auto" style="font-weight: bold">$422.40</p>
                            </div>
                            <p class="card-text">Women's Shoes<br>
                                White/Green/Black<br>
                                Size
                                <select class="custom-select no-border">
                                    <option selected>S</option>
                                    <option selected>M</option>
                                    <option selected>L</option>
                                    <option selected>XL</option>
                                </select>
                            </p>
                            <button type="button" class="btn btn-light"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-4">
                <h3 class="card-title">Summary</h3>
                <div class="card mt-3 no-border">

                    <ul class="list-group list-group-flush pb-3">
                        <li class="pt-2 d-flex justify-content-between align-items-center">
                            Subtotal
                            <span>$422.40</span>
                        </li>
                        <li class="py-2 d-flex justify-content-between align-items-center border-bottom">
                            Estimated Delivery & Handling
                            <span>$10</span>
                        </li>
                        <li class="py-2 d-flex justify-content-between align-items-center font-weight-bold border-bottom">
                            Total
                            <span>$432.40</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-dark mt-3 rounded-pill btn-lg w-100">Checkout</a>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="container mt-4">
        <h3>Shopping now!</h3>

        <div class="container px-5 mt-3 md-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/men-shoes.jpg') }}" class="card-img-top" alt="Men Shoes">
                        <div class="card-body">
                            <h5 class="card-title">Men Shoes Collection</h5>
                            <p class="card-text small">Constructed from luxury nylons, leathers, and custom
                                hardware,
                                featuring
                                sport
                                details such as hidden breathing vents, waterproof + antimicrobial linings, and
                                more.
                            </p>
                            <a href="{{ url('/men') }}" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/women-shoes.jpg') }}" class="card-img-top" alt="Women Shoes">
                        <div class="card-body">
                            <h5 class="card-title">Women Shoes Collection</h5>
                            <p class="card-text small">Constructed from luxury nylons, leathers, and custom
                                hardware,
                                featuring
                                sport
                                details such as hidden breathing vents, waterproof + antimicrobial linings, and
                                more.
                            </p>
                            <a href="{{ url('/women') }}" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/kid-shoes.jpg') }}" class="card-img-top" alt="Kids Shoes">
                        <div class="card-body">
                            <h5 class="card-title">Kids Shoes Collection</h5>
                            <p class="card-text small">Constructed from luxury nylons, leathers, and custom
                                hardware,
                                featuring
                                sport
                                details such as hidden breathing vents, waterproof + antimicrobial linings, and
                                more.
                            </p>
                            <a href="{{ url('/kids') }}" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
