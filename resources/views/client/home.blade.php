@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')
    <div class="container mt-5">
        <div class="banner mb-5"
            style="background-image: url('{{ asset('images/banner.jpg') }}'); height: 400px; background-size: cover; background-position: center;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-center text-white">
                    <h1>Discount 20% For All Orders Over $2000</h1>
                    <p>Use coupon code DISCOUNT20</p>
                </div>
            </div>
        </div>

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
