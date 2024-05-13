<div class="container px-4 mt-3">
    <div class="row">
        <!-- Filters Sidebar for large screens -->
        <div class="col-md-2 px-3 d-none d-md-block">
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
                <!-- Range Silder -->

                <div class="mb-3">
                    <p class="form-label border-bottom pb-2">COLOR</p>
                    <div class="form-check mt-3">
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
            <div class="container mt-3">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4 mb-5">
                        <div class="card border-0 rounded rounded-4 border shadow h-100">
                            <a href="{{ route('product.product-detail', $product->id) }}" class="text-dark text-decoration-none">
                                <img src="{{ asset('images/shoe1-black.jpg') }}" class="card-img-top img-fluid " alt="{{ $product->name }}" style="object-fit: cover; height: 250px;">
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
                                        {{ Str::limit($product->description, 100) }}
                                    </p>
                                    <p class="text-secondary mb-2 fw-bold">${{ number_format($product->price, 2) }}
                                        <span class="text-muted fw-bold"><del>${{ number_format($product->price, 2) }}</del></span>
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