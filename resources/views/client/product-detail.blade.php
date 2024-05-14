@extends('layouts.client')

@section('content')
<div class="container mt-2">
    <div class="row pb-5 pt-2 px-5">
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
        <div class="col-md-6">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid shadow-sm">
        </div>
        <div class="col-md-6 px-5">
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <h2>{{ $product->name }}</h2>
                <p class="fs-5"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="fw-bold text-secondary" style="font-size: 0.9em;">CODE: <span id="code">{{ $product->id }}</span></p>
                <!-- Color and Size Options -->
                <div class="mt-3">
                    <p><strong>Color:</strong><br>
                        <select id="colorSelect" name="color" class="form-select">
                            @foreach ($product->getAllColors() as $size)
                            <option value="{{ trim($size) }}">{{ trim($size) }}</option>
                            @endforeach
                        </select>
                    </p>
                    <p><strong>Size:</strong><br>
                        <select id="sizeSelect" name="size" class="form-select">
                            @foreach ($product->getAllSizes() as $color)
                            <option value="{{ trim($color) }}">{{ trim($color) }}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <!-- Quantity -->
                <div class="mb-3 w-25">
                    <label for="quantity" class="form-label"><strong>Quantity:</strong></label>
                    <input type="number" name="quantity" class="form-control" id="quantity" value="1" min="1">
                </div>

                <!-- Add to Cart Button -->
                <button type="submit" class="btn btn-secondary mt-2 w-100 py-3">Add to Cart</button>
                @if(session('error'))
                <div class="mt-2 alert alert-danger">
                    <p>{{ session('error') }}</p>
                </div>
                @endif
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