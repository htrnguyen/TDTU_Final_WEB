@extends('layouts.client')

@section('content')
    <div class="container">
        <h2>Search results for "{{ $query }}"</h2>
        @if ($results->isEmpty())
            <p>No products found!</p>
        @else
            <div class="row">
                @foreach ($results as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-price">${{ $product->price }}</p>
                                <a href="#" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
