@props(['productDetail'])
<tr>
    <td class="border-0">
        <div class="d-flex align-items-center">
            <div class="col-md-3">
                <!-- TODO: product img link -->
                <img src="{{ asset($productDetail->image) }}" alt="Product" style="width: 90%; height: 100%">
            </div>
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">{{ $productDetail->name }}</h5>
                </div>
                <!-- <a href="/men/nike-air-zoom-pegasus-35-143" class="font-weight-bold text-decoration-none">{{ $productDetail->name }}</a> -->
                <div>Color: {{ $productDetail->color }}</div>
                <div>Size: {{ $productDetail->size }}</div>
                <form method="POST" action="{{ route('cart.delete', ['id' => $productDetail->product_detail_id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
    </td>
    <td class="border-0 text-center">${{ $productDetail->price }}</td>
    <td class="border-0 text-center">{{ $productDetail->quantity }}</td>
    <td class="border-0 text-center">${{ $productDetail->price * $productDetail->quantity }}</td>
</tr>




