@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')
    {{-- Banner --}}
    <div class="main-banner-home d-flex align-items-center justify-content-end"
        style="background: url('{{ asset('images/Banner/home_banner.png') }}') no-repeat center left / cover; height: 500px;">
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
                    <img src="{{ asset('images/men-shoes.png') }}" class="card-img-top" alt="Men Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Men Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware,
                            featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/men') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('images/women-shoes.png') }}" class="card-img-top" alt="Women Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Women Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware,
                            featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/women') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('images/kids-shoes.jpg') }}" class="card-img-top" alt="Kids Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Kids Shoes Collection</h5>
                        <p class="card-text small">Constructed from luxury nylons, leathers, and custom hardware,
                            featuring
                            sport
                            details such as hidden breathing vents, waterproof + antimicrobial linings, and more.</p>
                        <a href="{{ url('/kids') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container px-4 mt-5">
        <h3 class="text-center mb-4">Featured Products</h3>
        <div class="row">

            {{-- Carousel loop --}}
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($products->chunk(3) as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row ms-2 me-2 mb-5">
                                @foreach ($chunk as $product)
                                    <div class="col-md-4">
                                        <div class="card border-0 rounded rounded-4 border shadow h-100">
                                            <a href="{{ route('product.product-detail', $product->id) }}"
                                                class="text-dark text-decoration-none">
                                                <img src="{{ asset($product->image) }}" class="card-img-top img-fluid "
                                                    alt="{{ $product->name }}" style="object-fit: cover; height: 250px;">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-secondary mb-2 small">
                                                            {{ $product->category ? $product->category->category_name : 'No Category' }}
                                                        </p>
                                                        <p class="text-secondary mb-2 small">
                                                            {{ $product->created_at->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                    <h5
                                                        class="card-title
                                                        ">
                                                        {{ Str::limit($product->name, 50) }}</h5>
                                                    <p class="text-secondary mb-2 fw-bold">
                                                        ${{ number_format($product->price, 2) }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>

@endsection
