@extends('layouts.admin')
@section('container-main')
<div class="container-main-coupon">
    <div class="coupon-header">
        <div class="ph-search">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-search"></i>
        </div>
        <a href="#" id="ph-create">
            <i class="fa-solid fa-plus"></i>
            <p>New Voucher</p>
        </a>
    </div>
    <div class="coupon-body">
        @foreach ($coupons as $coupon)
            @component('coupon-card', ['coupon' => $coupon])
            @endcomponent
        @endforeach
        {{-- <div class="coupon-action">
            <button class="ca-edit">
                <p>View Details</p>
            </button>
            <button class="ca-delete">
                <p>Delete</p>
            </button>
        </div> --}}
    </div>

</div>
</div>
<script>
    const toggleCheckboxes = document.querySelectorAll('.check-toggle');
    toggleCheckboxes.forEach(function(checkbox, index) {
        if (checkbox.addEventListener('click', function() {
                console.log('clicked' + index);
            }));
        checkbox.id = 'check-toggle' + index;
    });

    const btnCheckboxToggles = document.querySelectorAll('.btn-checkbox-toggle');
    btnCheckboxToggles.forEach(function(btnCheckboxToggle, index) {
        btnCheckboxToggle.htmlFor = 'check-toggle' + index;
    });
</script>

@endsection