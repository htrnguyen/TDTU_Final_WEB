@props(['coupon'])
<div class="coupod-child">
    <img src="{{asset('images/counpon.png')}}" alt="Coupon">
    <div class="coupon-details">
        <div class="cd-day">
            <h3>{{ $coupon->title }}</h3>
            <div class="cd-active">
                <div class="cd-active-details">
                    <i class="fa-solid fa-circle"></i>
                    <h4>Active</h4>
                </div>
                <input type="checkbox" class="check-toggle" value="{{ $coupon->isActive() }}">
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
                <h4>Discount</h4>
            </div>
            <p>{{ $coupon->discount }}%</p>
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