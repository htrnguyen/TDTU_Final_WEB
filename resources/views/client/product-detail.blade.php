@extends('layouts.client')

@section('content')
    <div class="container mt-2">
        <div class="row pb-5 pt-2 px-5">
            @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
            <div class="col-md-6">
                <img src="{{ asset('images/shoe3.jpg') }}" alt="{{ $product->name }}" class="img-fluid shadow-sm">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p class="fs-5"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>

                <!-- SKU, Color, Size -->
                <p class="fw-bold text-secondary" style="font-size: 0.9em;">SKU:<span
                        id="sku">{{ $product->id }}</span></p>
                <ul>
                    <li class="text-dark"><strong>Color:</strong> <span id="color"></span></li>
                    <li class="text-dark"><strong>Size:</strong> <span id="size"></span></li>
                </ul>

                <!-- Add to Cart Button -->
                {{-- <form action="{{ route('cart', $product->id) }}" method="POST"> --}}
                <form action="{{ route('cart')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary mt-2">Add to Cart</button>
                </form>


                <!-- Color and Size Options -->
                <div class="mt-3">
                    <p>
                        @foreach (explode(',', $product->size) as $index => $size)
                            <a href="#" class="btn border {{ $index === 0 ? 'btn-success' : '' }}" role="button"
                                data-size="{{ trim($size) }}">{{ trim($size) }}</a>
                        @endforeach
                    </p>
                    <p>
                        @foreach (explode(',', $product->color) as $index => $color)
                            <a href="#" class="btn border {{ $index === 0 ? 'btn-success' : '' }}" role="button"
                                data-color="{{ trim($color) }}">{{ trim($color) }}</a>
                        @endforeach
                    </p>
                </div>

                <!-- Product Description -->
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection

<script>
    window.productId = "{{ $product->id }}";
</script>
