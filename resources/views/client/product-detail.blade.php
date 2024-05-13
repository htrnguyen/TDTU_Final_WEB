@extends('layouts.client')

@section('content')
    <div class="container mt-2">
        <div class="row pb-5 pt-2 px-5">
            @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
            <div class="col-md-6">
                <img src="{{ asset('images/shoe3.jpg') }}" alt="{{ $product->name }}" class="img-fluid shadow-sm">
            </div>
            <div class="col-md-6 px-5">
                <h2>{{ $product->name }}</h2>
                <p class="fs-5"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>

                <!-- Code, Color, Size -->
                <p class="fw-bold text-secondary" style="font-size: 0.9em;">CODE: <span
                        id="code">{{ $product->id }}</span></p>


                <!-- Color and Size Options -->
                <div class="mt-3">
                    <p><strong>Color:</strong><br>
                        @foreach (explode(',', $product->size) as $index => $size)
                            <a href="#" class=" btn border {{ $index === 0 ? 'btn-success' : '' }}"
                                role="button" data-size="{{ trim($size) }}">{{ trim($size) }}</a>
                        @endforeach
                    </p>
                    <p><strong>Size:</strong><br>
                        @foreach (explode(',', $product->color) as $index => $color)
                            <a href="#" class="btn border {{ $index === 0 ? 'btn-success' : '' }}"
                                role="button" data-color="{{ trim($color) }}">{{ trim($color) }}</a>
                        @endforeach
                    </p>
                </div>

                <!-- Quantity -->
                <div class="mb-3 w-25">
                    <label for="quantity" class="form-label"><strong>Quantity:</strong></label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1">
                </div>

                <!-- Add to Cart Button -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary mt-2 w-100 py-3">Add to Cart</button>
                </form>

                <!-- Product Description -->
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection

<script>
    window.productId = "{{ $product->id }}";
</script>
