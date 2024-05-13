@extends('layouts.client')

@section('content')
<div class="container mt-4">
    <div class="row m-5">
        <div class="col-md-6 ">
            <img src="{{ asset('images/Jordan.png') }}" alt="{{ $product->name }}" class="border img-fluid">
        </div>
        <div class="col-md-6 border">
            <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
                @csrf
                <h3>{{ $product->name }}</h3>
                <h4>${{ number_format($product->price, 2) }}</h4>
                <p>SKU: {{ $product->id }}</p>
                <p>Color: {{ $product->color }} </p>
                <p>Size: {{ $product->size }} </p>
                <div>
                    <label>Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" class="form-control w-25">
                </div>
                <p class="small text-start pt-2">{{ $product->description }}</p>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection