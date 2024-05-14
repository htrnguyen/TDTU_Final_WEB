@extends('layouts.client')

@section('title', 'Sale')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-md-3">
            <h2 class="mb-4">Sale (45)</h2>
            <div class="list-products" style="overflow-y: auto; height:500px">
                <div class="mt-3 border-top pt-3">
                    <p class="d-flex justify-content-between align-items-center text-right fw-bold" type="button" id="genderDropdown">
                        Gender <i class="fa-solid fa-chevron-down"></i>
                    </p>
                    <div id="genderContent" class="mt-4" style="display: none;">

                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Men</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Women</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Kids</label><br></br>
                    </div>
                </div>

                <div class="mt-3 border-top pt-3">
                    <p id="colorDropdown" class="d-flex justify-content-between align-items-center text-right fw-bold" type="button">
                        Color <i class="fa-solid fa-chevron-down"></i>
                    </p>
                    <div id="colorContent" class="form-check mt-3" style="display: none;">
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> White</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Black</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Grey</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Blue</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Purple</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="colorFilter">
                        <label for="colorFilter" class="form-check-label mr-2"> Green</label><br></br>
                    </div>
                </div>
                <div class="mt-3 border-top pt-3">
                    <p id="sizeDropdown" class="d-flex justify-content-between align-items-center text-right fw-bold" type="button">
                        Size <i class="fa-solid fa-chevron-down"></i>
                    </p>
                    <div id="sizeContent" class="form-check mt-3" style="display: none;">
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 35</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 36</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 36.5</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 37</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 38</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 39</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 40</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 41</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 42</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 43</label><br></br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox">
                        <label class="form-check-label mr-2"> 44</label><br></br>
                    </div>
                </div>

                <div class="mt-3 border-top pt-3">
                    <p id="priceDropdown" class="d-flex justify-content-between align-items-center text-right fw-bold" type="button">
                        Price <i class="fa-solid fa-chevron-down"></i>
                    </p>
                    <div id="priceContent" class="form-check mt-3" style="display: none;">
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="sizeFilter1">
                        <label for="sizeFilter1" class="form-check-label mr-2">Under $300</label><br><br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="sizeFilter2">
                        <label for="sizeFilter2" class="form-check-label mr-2">$300 - $1,000</label><br><br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="sizeFilter3">
                        <label for="sizeFilter3" class="form-check-label mr-2">$1,000 - $5,000</label><br><br>
                        <input class="form-check-input form-check-input-lg border border-dark" type="checkbox" id="sizeFilter3">
                        <label for="sizeFilter3" class="form-check-label mr-2">Over $5,000</label><br><br>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-9">
            <div class="col-md-12">
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
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <a href="" class="text-dark">
                            <img src="{{ asset('images/shoe3.jpg') }}" class="card-img-top" alt="Nike ACG Moc Premium">
                            <div class="card-body">
                                <h5 class="card-title">Just In</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Nike ACG Moc Premium</h6>
                                <p class="card-text">Men's Shoes<br>1 Colour</p>
                                <p class="card-text text-danger fw-bold">$812,56 <span class="text-muted fw-bold"><del>$650,048</del></span></p>
                                <p class="card-text text-success">20% off</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <a href="" class="text-dark">
                            <img src="{{ asset('images/shoe2.jpg') }}" class="card-img-top" alt="Nike Air Force 1 '07 Next Nature">
                            <div class="card-body">
                                <h5 class="card-title">Sustainable Materials</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Nike Air Force 1 '07 Next Nature</h6>
                                <p class="card-text">Women's Shoes<br>1 Colour</p>
                                <p class="card-text text-danger fw-bold">$458,66 <span class="text-muted fw-bold"><del>$413,66</del></span></p>
                                <p class="card-text text-success">10% off</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <a href="" class="text-dark">
                            <img src="{{ asset('images/shoe1-black.jpg') }}" class="card-img-top" alt="Nike Air Force 1 '07 Next Nature">
                            <div class="card-body">
                                <h5 class="card-title">Sustainable Materials</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Nike Air Force 1 '07 Next Nature</h6>
                                <p class="card-text">Women's Shoes<br>1 Colour</p>
                                <p class="card-text text-danger fw-bold">$458,66 <span class="text-muted fw-bold"><del>$413,66</del></span></p>
                                <p class="card-text text-success">10% off</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('partials.products', ['products' => $products]) --}}

@endsection