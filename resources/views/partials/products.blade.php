<div class="container px-4 mt-3">
    <div class="row">
        <!-- Filters Sidebar for large screens -->
        <div class="col-md-2 px-3 d-none d-md-block">
            <div class="list-products" style="overflow-y: auto; height:500px">
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
            <div class="container mt-3">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-5">
                            <div class="card border-0 rounded rounded-4 border shadow h-100">
                                <a href="{{ route('product.product-detail', $product->id) }}"
                                    class="text-dark text-decoration-none">
                                    <img src="{{ asset( $product->image) }}" class="card-img-top img-fluid "
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
                                        <h5 class="card-title">{{ Str::limit($product->name, 50) }}</h5>
                                        <p class="text-secondary mb-2 small text-danger">
                                            {{ $product->getNumberOfColors()  }}
                                        </p>
                                        <p class="text-secondary mb-2 fst-italic">
                                            {{ Str::limit($product->description, 100) }}</p>
                                        <p class="text-secondary mb-2 fw-bold">${{ number_format($product->price, 2) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- End Load Products --}}
            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-2">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
