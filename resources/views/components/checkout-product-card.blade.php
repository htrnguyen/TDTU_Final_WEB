@props(['productDetail'])
<div class="row mb-3">
    <div class="col-3">
        <img src="{{ asset($productDetail->image) }}" alt="{{ $productDetail->name }}" class="img-fluid shadow-lg me-4" width="100%">
    </div>
    <div class="col-9">
        <h5 class="card-title">{{ $productDetail->name }}</h5>
        <p>Color: {{ $productDetail->color }}</p>
        <p>Size: {{ $productDetail->color }}</p>
        <p>Quantity: {{ $productDetail->quantity }}</p>
        <p class="text-end"><strong>$ {{ $productDetail->price }}</strong></p>
    </div>
</div>