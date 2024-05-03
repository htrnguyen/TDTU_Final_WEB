@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('banner')
    <div class="main-banner-home d-flex align-items-center"
        style="background-image: url('{{ asset('images/banner.png') }}'); height: 400px; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-center text-md-left px-2">
                    <h1 class="text-white">Discount 20% For All Orders Over $2000</h1>
                    <p class="text-white">Use coupon code <span class="font-weight-bold">DISCOUNT20</span></p>
                    <p class="text-white">Use coupon DISCOUNT20</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/men-shoes.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$100.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/women-shoes.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$150.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/kid-shoes.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$200.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
