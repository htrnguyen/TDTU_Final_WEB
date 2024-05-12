@extends('layouts.client')

@section('title', 'Men Collection')
@section('content')
    <!-- Main Content -->
    
    <!-- Banner Section -->
    <img src="{{ asset('images/kids-banner.jpg') }}" class="img-thumbnail banner no-border" alt="Kids">
    
    <div class="container px-5 mt-3"> 
        <div class="row">
            <!-- Filters Sidebar for large screens -->
            <div class="col-md-2 d-none d-md-block">
                <div>
                    <h5 class="mb-4">FILTER BY</h5>
                    <div class="mb-3">
                        <p class="form-label">PRICE</p>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="row slider-labels">
                            <div class="col-sm-7 caption">
                                <span id="slider-range-value1"></span>
                            </div>
                            <div class="col-sm-5 caption">
                                <span id="slider-range-value2"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <p class="form-label border-bottom pb-2">COLOR</p>
                        <div class="form-check mt-3">
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2" > White</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2"> Black</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2" > Grey</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark"  type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2"> Blue</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark"  type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2"> Purple</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark"  type="checkbox" id="colorFilter" >
                            <label for="colorFilter" class="form-check-label mr-2"> Green</label><br></br>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="form-label border-bottom pb-2">SIZE</p>
                        <div class="form-check mt-3">
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                            <label class="form-check-label mr-2"> S</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                            <label class="form-check-label mr-2"> M</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                            <label class="form-check-label mr-2"> L</label><br></br>
                            <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                            <label class="form-check-label mr-2"> XL</label><br></br>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Main Content Column -->
            <div class="col-md-10">
                <div class="d-flex justify-content-end mb-2 align-items-center">
                    <!-- Sorting Dropdown -->
                    <span class="me-1">Sort By: </span>
                    <select class="form-select w-auto me-2" onchange="location = this.value;">
                        <option value="?sort=default" selected>Default</option>
                        <option value="?sort=price">Price</option>
                        <option value="?sort=name">Name</option>
                    </select>
                    <a href="" class="text-dark"><i class="fas fa-arrow-down"></i></a>
                </div>  

                {{-- Load Products --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <a href="" class="text-dark text-decoration-none">
                                <img src="{{ asset('images/shoe1-purple.jpg') }}" class="card-img-top" alt="">
                                <div class="original-info card-body" >
                                    <h5 class="card-title">Strutter shoes</h5>
                                    <p class="card-text mb-2">Men's Shoes</p>
                                    <p class="text-secondary mb-2">3 colors</p>
                                    <p class="text-secondary mb-2">$422.40</p>
                                </div>
                                <div class="new-info card-body" style="display: none;">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('images/shoe1-purple.jpg') }}" class="img-thumbnail" alt="Image 1">
                                        </div>
                                        <div class="col-3">
                                            <img src="{{ asset('images/shoe1-green.jpg') }}" class="img-thumbnail" alt="Image 2">
                                        </div>
                                        <div class="col-3">
                                            <img src="{{ asset('images/shoe1-black.jpg') }}" class="img-thumbnail" alt="Image 3">
                                        </div>
                                    </div>
                                    <p class="text-secondary mt-3 mb-2">$422.40</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <a href="" class="text-dark text-decoration-none">
                                <img src="{{ asset('images/shoe2.jpg') }}" class="card-img-top" alt="">
                                <div class="original-info card-body">
                                    <h5 class="card-title">Nizza trefoil shoes</h5>
                                    <p class="card-text mb-2">Men's Shoes</p>
                                    <p class="text-secondary mb-2">1 color</p>
                                    <p class="text-secondary mb-2">$597.30</p>
                                </div>
                                <div class="new-info card-body" style="display: none;">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('images/shoe2.jpg') }}" class="img-thumbnail" alt="Image 1">
                                        </div>
                                    </div>
                                    <p class="text-secondary mt-3 mb-2">$422.40</p>
                                </div>
                            </a>                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <a href="" class="text-dark text-decoration-none">
                                <img src="{{ asset('images/shoe3.jpg') }}" class="card-img-top" alt="">
                                <div class="original-info card-body">
                                    <h5 class="card-title">Seasonal color chuck 70</h5>
                                    <p class="card-text mb-2">Men's Shoes</p>
                                    <p class="text-secondary mb-2">1 color</p>
                                    <p class="text-secondary mb-2">$882.20</p>
                                </div>
                                <div class="new-info card-body" style="display: none;">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('images/shoe3.jpg') }}" class="img-thumbnail" alt="Image 1">
                                        </div>
                                    </div>
                                    <p class="text-secondary mt-3 mb-2">$422.40</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
