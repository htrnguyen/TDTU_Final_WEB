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
            <img src="{{asset('images/counpon-1.png')}}" alt="Coupon">
            <div class="coupon-details">
                <div class="cd-day">
                    <h3>Black Friday Voucher</h3>
                    <div class="cd-active">
                        <div class="cd-active-details">
                            <i class="fa-solid fa-circle"></i>
                            <h4>Active</h4>
                        </div>
                        <input type="checkbox" class="check-toggle">
                        <label class="btn-checkbox-toggle"></label>
                    </div>
                </div>
                <div class="cd-type">
                    <div class="cd-icon-type">
                        <i class="fa-solid fa-ticket"></i>
                        <h4>Type</h4>
                    </div>
                    <p>Voucher</p>
                </div>
                <div class="cd-shipping">
                    <div class="cd-icon-shipping">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Shipping</h4>
                    </div>
                    <p>Online voucher</p>
                </div>
                <div class="cd-price">
                    <div class="cd-icon-price">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h4>Price</h4>
                    </div>
                    <p>$100</p>
                </div>
            </div>
            <div class="coupon-action">
                <button class="ca-edit">
                    <p>View Details</p>
                </button>
                <button class="ca-delete">   
                    <p>Delete</p>
                </button>
            </div>   
        </div>
        <div class="coupod-child">
            <img src="{{asset('images/counpon-1.png')}}" alt="Coupon">
            <div class="coupon-details">
                <div class="cd-day">
                    <h3>Black Friday Voucher</h3>
                    <div class="cd-active">
                        <div class="cd-active-details">
                            <i class="fa-solid fa-circle"></i>
                            <h4>Active</h4>
                        </div>
                        <input type="checkbox"  class="check-toggle">
                        <label for="check-toggle" class="btn-checkbox-toggle"></label>
                    </div>
                </div>
                <div class="cd-type">
                    <div class="cd-icon-type">
                        <i class="fa-solid fa-ticket"></i>
                        <h4>Type</h4>
                    </div>
                    <p>Voucher</p>
                </div>
                <div class="cd-shipping">
                    <div class="cd-icon-shipping">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Shipping</h4>
                    </div>
                    <p>Online voucher</p>
                </div>
                <div class="cd-price">
                    <div class="cd-icon-price">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h4>Price</h4>
                    </div>
                    <p>$100</p>
                </div>
            </div>
            <div class="coupon-action">
                <button class="ca-edit">
                    <p>View Details</p>
                </button>
                <button class="ca-delete">   
                    <p>Delete</p>
                </button>
            </div>   
        </div>
        <div class="coupod-child">
            <img src="{{asset('images/counpon-1.png')}}" alt="Coupon">
            <div class="coupon-details">
                <div class="cd-day">
                    <h3>Black Friday Voucher</h3>
                    <div class="cd-active">
                        <div class="cd-active-details">
                            <i class="fa-solid fa-circle"></i>
                            <h4>Active</h4>
                        </div>
                        <input type="checkbox"  class="check-toggle">
                        <label for="check-toggle" class="btn-checkbox-toggle"></label>
                    </div>
                </div>
                <div class="cd-type">
                    <div class="cd-icon-type">
                        <i class="fa-solid fa-ticket"></i>
                        <h4>Type</h4>
                    </div>
                    <p>Voucher</p>
                </div>
                <div class="cd-shipping">
                    <div class="cd-icon-shipping">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Shipping</h4>
                    </div>
                    <p>Online voucher</p>
                </div>
                <div class="cd-price">
                    <div class="cd-icon-price">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h4>Price</h4>
                    </div>
                    <p>$100</p>
                </div>
            </div>
            <div class="coupon-action">
                <button class="ca-edit">
                    <p>View Details</p>
                </button>
                <button class="ca-delete">   
                    <p>Delete</p>
                </button>
            </div>   
        </div>
        
    </div>
</div>
<script>
    const toggleCheckboxes = document.querySelectorAll('.check-toggle');
    toggleCheckboxes.forEach(function(checkbox, index) {
        if(checkbox.addEventListener('click', function() {
            console.log('clicked' + index);
        }));
        checkbox.id ='check-toggle' + index;
    });

    const btnCheckboxToggles = document.querySelectorAll('.btn-checkbox-toggle');
    btnCheckboxToggles.forEach(function(btnCheckboxToggle, index) {
        btnCheckboxToggle.htmlFor = 'check-toggle' + index;
    });

</script>

@endsection
