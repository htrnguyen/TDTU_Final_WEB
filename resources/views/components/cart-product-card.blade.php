@props(['productDetail'])
<tr>
    <td class="border-0">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/Jordan.png') }}" alt="Nike air zoom pegasus 35" class="img-fluid shadow-lg me-4" width="20%" height="20%">
            <div>
                <a href="/men/nike-air-zoom-pegasus-35-143" class="font-weight-bold text-decoration-none">{{ $productDetail->name }}</a>
                <div>Color: {{ $productDetail->color }}</div>
                <div>Size: {{ $productDetail->size }}</div>
                <a type="button" class="btn btn-delete"><i class="far fa-trash-alt"></i></a>
            </div>
        </div>
    </td>
    <td class="border-0 text-center">$ {{ $productDetail->price }}</td>
    <td class="border-0 text-center">{{ $productDetail->quantity }}</td>
    <td class="border-0 text-center">{{ $productDetail->price * $productDetail->quantity }}</td>
</tr>