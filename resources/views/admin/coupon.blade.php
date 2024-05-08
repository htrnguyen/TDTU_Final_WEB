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
        <div class="coupod-child">
            <img src="{{asset('images/counpon.png')}}" alt="Coupon">
            <div class="coupon-details">
                <div class="cd-type">
                    <div class="cd-icon-type">
                        <i class="fa-solid fa-ticket"></i>
                        <h3>Type</h3>
                    </div>
                    <p>Voucher</p>
                </div>
                <div class="cd-shipping">
                    <div class="cd-icon-shipping">
                        <i class="fa-solid fa-truck"></i>
                        <h3>Shipping</h3>
                    </div>
                    <p>Online voucher</p>
                </div>
                <div class="cd-price">
                    <div class="cd-icon-price">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h3>$10.00</h3>
                    </div>
                    <p>$100</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
