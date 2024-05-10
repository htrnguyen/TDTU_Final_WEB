@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')
    {{-- Banner --}}
    <div class="main-banner-home d-flex align-items-center justify-content-end"
        style="background: url('{{ asset('images/banner.png') }}') no-repeat center left / cover; height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 text-right">
                    <h1 class="text-dark display-4 fw-light">Discount 20% For All Orders Over $2000</h1>
                    <p class="small text-dark">Use coupon code <span class="fw-bold">DISCOUNT20</span></p>
                </div>
            </div>
        </div>
    </div>


    {{-- Content --}}
    <div class="container px-5 mt-3 md-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('images/men-shoes.jpg') }}" class="card-img-top" alt="Men Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Men Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware, featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/men') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('images/women-shoes.jpg') }}" class="card-img-top" alt="Women Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Women Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware, featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/women') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('images/kid-shoes.jpg') }}" class="card-img-top" alt="Kids Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Kids Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware, featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/kids') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h4 class="text-center mb-4">Featured Products</h4>
        <div class="row px-4">
            @foreach ($products as $product)
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card border">
                        <img src="{{ asset('images/Jordan.png') }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: cover;" alt="{{ $product->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title {{ $product->featured ? 'text-danger' : '' }}">{{ $product->name }}</h5>
                            <p class="card-text small text-truncate" style="max-height: 38px;">{{ $product->description }}
                            </p>
                            <p class="card-text mt-auto fw-bold">${{ number_format($product->price, 2) }}</p>
                            <a href="{{ url('/product/' . $product->id) }}" class="btn btn-dark mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
