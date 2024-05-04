@extends('layouts.client')

@section('title', 'Men Collection')
@section('content')
    <!-- Main Content -->
    <div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs]) 
        <div class="row">
            <!-- Banner Section -->
            <div class="col-12 mb-3" style="background-color: #685f58;">
                <h1 class="text-white pt-3 pb-3 px-3">Men</h1>
            </div>

            <!-- Filters Sidebar for large screens -->
            <div class="col-md-3 d-none d-md-block">
                <div>
                    <h4>Filter by</h4>
                    <div class="mb-3">
                        <label for="priceRange" class="form-label">Price</label>
                        <input type="range" class="form-range" id="priceRange" min="0" max="1000"
                            value="500">
                    </div>
                    <div class="mb-3">
                        <label for="colorFilter" class="form-label">Color</label>
                        <select id="colorFilter" class="form-select">
                            <option>White</option>
                            <option>Black</option>
                            <option>Grey</option>
                            <option>Blue</option>
                            <!-- Add other colors -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sizeFilter" class="form-label">Size</label>
                        <select id="sizeFilter" class="form-select">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <!-- Add other sizes -->
                        </select>
                    </div>
                </div>

            </div>

            <!-- Main Content Column -->
            <div class="col-md-9">
                <div class="d-flex justify-content-end mb-2">
                    <!-- Sorting Dropdown -->
                    <select class="form-select w-auto" onchange="location = this.value;">
                        <option value="?sort=default" selected>Default</option>
                        <option value="?sort=price">Price</option>
                        <option value="?sort=name">Name</option>
                    </select>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-price">${{ $product->price }}</p>
                                    <a href="#" class="btn btn-primary">View
                                        Product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
