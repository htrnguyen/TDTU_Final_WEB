@extends('layouts.client')

@section('content')
<div class="container mt-3">
    @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    <div class="row">
        <div class="col-12">
            <hr>
            @if(session('cart') && count(session('cart')) > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity']; @endphp
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $details['image']) }}" width="100" height="100" class="img-responsive"/>
                                        {{ $details['name'] }}
                                    </td>
                                    <td>${{ $details['price'] }}</td>
                                    <td>{{ $details['quantity'] }}</td>
                                    <td>${{ $details['price'] * $details['quantity'] }}</td>
                                    <td>
                                        <button class="btn btn-danger remove-from-cart" data-id="{{ $id }}">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Order Summary</h3>
                        <p>Subtotal: ${{ $total }}</p>
                        <p>Total: ${{ $total }}</p>
                        <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Your cart is empty!
                    <a href="{{ url('/') }}" class="alert-link">Continue Shopping</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
