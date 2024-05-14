@extends('layouts.client')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row px-5">
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])

        <!-- Column 1: Contact Information -->
        <div class="col-md-6 mt-2 bg-light">

            <div class="row mb-3 informationInput px-2 d-none">
                <div class="col-12 border rounded px-2">
                    <div class="row align-items-center py-2 px-3 justify-content-center">
                        <div class="col-3 text-start"><span>Contact</span></div>
                        <div class="col-6 text-center content-email"><span></span></div>
                        <div class="col-3 d-flex justify-content-end"><a href="#" class="text-decoration-none change-contact">Change</a></div>
                    </div>
                    <div class="d-none row infor-address align-items-center py-2 px-3 justify-content-center">
                        <hr>
                        <div class="col-3 text-start"><span>Ship to</span></div>
                        <div class="col-6 text-center content-address"><span></span></div>
                        <div class="col-3 d-flex justify-content-end"><a href="#" class="text-decoration-none change-shipping">Change</a></div>
                    </div>
                </div>
            </div>

            {{-- Form input Contact Information --}}
            <!-- <form id="contactInfoForm"> -->
            <form action="{{ route('checkout.submit') }}" method="POST">
                @csrf
                <input type="hidden" name="products" value="{{ json_encode($productDetails) }}">
                <input type="hidden" name="total" value="{{ $total }}">
                <div id="contactInfoForm">
                    <h4>Contact Information</h4>
                    <div class="mb-3">
                        <input type="email" class="form-control email-contact" id="email" placeholder="Enter your email" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="button" id="continueButton" class="btn btn-secondary py-2">Continue to
                            Shipping</button>
                    </div>
                </div>

                {{-- Form input Shipping Address --}}
                <!-- <form id="additionalForm" class="d-none mt-5 mb-4"> -->
                <div id="additionalForm" class="d-none mt-5 mb-4">
                    <h4>Shipping Address</h4>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{ $user->first_name . ' ' . $user->last_name }}" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="telephone" name="phone_number" placeholder="Telephone" value="{{ $user->phone_number ?? '' }}" required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="address" name="shipping_address" value="{{ $user->phone_number ?? '' }}" placeholder="Address" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="note" name="note" placeholder="Note (optional)">
                    </div>


                    <h4 class="mt-4">Shipping Method</h4>
                    <div class="pt-1 ps-2">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="shipping_method" id="shippingMethod1" value="Standard shipping" checked>
                            <label class="form-check-label" for="shippingMethod1">
                                Standard Shipping (2-3 days)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="shipping_method" id="shippingMethod2" value="Express shipping">
                            <label class="form-check-label" for="shippingMethod2">
                                Express Shipping (1-2 days)
                            </label>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" id="shippingButton" class="btn btn-secondary py-2">Continue to
                                Payment</button>
                        </div>

                    </div>
                </div>

                {{-- Form input Payment Method --}}
                <!-- <form id="paymentInput" class="mt-2 d-none"> -->
                <div id="paymentInput" class="mt-2 d-none">
                    <h4>Payment Method</h4>
                    <div class="pt-1 ps-2">
                        <!-- Phương thức thanh toán bằng tiền mặt -->
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentMethod1" value="Casn on delivery" checked>
                            <label class="form-check-label" for="paymentMethod1">
                                <img src="{{ asset('images/payment/COC.png') }}" alt="COC Payment" style="width: 30px; height: 30px;" class="me-2">
                                Cash on Delivery
                            </label>
                        </div>
                        <!-- Phương thức thanh toán qua MoMo -->
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentMethod2" value="MoMo">
                            <label class="form-check-label" for="paymentMethod2">
                                <img src="{{ asset('images/Payment/Momo-2.png') }}" alt="MoMo Payment" style="width: 30px; height: 30px;" class="me-2">
                                MoMo Payment
                            </label>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-secondary py-2 placeOrder">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif


            {{-- Bill Order --}}
            <div id="sucesssOrder" class="row mt-5 d-none">
                <div class="col-12">
                    <h4><i class="fas fa-receipt"></i> Your Order</h4>
                </div>

                <!-- Recipient Information -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <p><i class="fas fa-user"></i> Recipient</p>
                        </div>
                        <div class="col-6 text-end" id="nameOrder">
                            <p></p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Shipping Method -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <p><i class="fas fa-shipping-fast"></i> Shipping Method</p>
                        </div>
                        <div class="col-6 text-end" id="shippingOrder">
                            <p></p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Address -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <p><i class="fas fa-map-marker-alt"></i> Address</p>
                        </div>
                        <div class="col-6 text-end" id="addressOrder">
                            <p></p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Payment Method -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <p><i class="fas fa-credit-card"></i> Payment Method</p>
                        </div>
                        <div class="col-6 text-end" id="paymentOrder">
                            <p></p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="mb-3 text-end">
                    <a href="{{ route('home') }}" class="btn btn-secondary w-100 py-2">Continue Shopping </a>
                </div>
            </div>
        </div>


        <!-- Column 2: Order Summary -->
        <div class="col-md-6 px-5">
            <div class="card border-0 bg-light">
                <div class="card-body" style="font-size:0.8em">
                    <!-- Item 1 -->
                    @foreach ($productDetails as $index => $productDetail)
                    @component('checkout-product-card', ['productDetail' => $productDetail])
                    @endcomponent
                    <hr>
                    @endforeach
                </div>
                <hr>
                <!-- Total -->
                <div class="mb-3">
                    <p class="mb-1">Sub total <span class="float-end">$ {{ $total }}</span></p>
                    <p class="mb-1">Discount <span class="float-end">$ {{ number_format($discountPrice, 2) }}</span>
                    </p>
                    <hr>
                    <h5>Total <span class="float-end">$ {{ $total }}</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const additionalForm = document.getElementById("additionalForm");
    const contactInfoForm = document.getElementById("contactInfoForm");
    const informationInput = document.querySelector(".informationInput");
    const paymentInput = document.getElementById("paymentInput");
    const emailContact = document.querySelector(".email-contact");
    const emailInfor = document.querySelector(".content-email");
    const inforAddress = document.querySelector(".infor-address");
    const addressInfor = document.querySelector(".content-address");
    const address = document.getElementById("address");
    const fullname = document.getElementById("fullname");
    const nameOrder = document.getElementById("nameOrder");
    const shippingOrder = document.getElementById("shippingOrder");
    const addressOrder = document.getElementById("addressOrder");
    const paymentOrder = document.getElementById("paymentOrder");
    const success = document.getElementById("sucesssOrder");

    // ------------------------------------------------ //
    // Function to CheckOut 

    // Function to CheckOut
    function toggleDisplay(element, display) {
        element.classList[display ? "remove" : "add"]("d-none");
    }

    function handleContinueClick() {
        toggleDisplay(additionalForm, true);
        toggleDisplay(contactInfoForm, false);
        toggleDisplay(informationInput, true);
        emailInfor.innerHTML = emailContact.value;
    }

    function handleChangeContactClick() {
        toggleDisplay(additionalForm, false);
        toggleDisplay(contactInfoForm, true);
        toggleDisplay(informationInput, false);
        toggleDisplay(paymentInput, false);
    }

    function handleShippingClick() {
        toggleDisplay(inforAddress, true);
        toggleDisplay(additionalForm, false);
        toggleDisplay(paymentInput, true);
        addressInfor.innerHTML = address.value;
    }

    function handleChangeShippingClick() {
        toggleDisplay(inforAddress, false);
        toggleDisplay(additionalForm, true);
        toggleDisplay(paymentInput, false);
    }

    function handlePlaceOrderClick(event) {
        // event.preventDefault();
        toggleDisplay(informationInput, false);
        toggleDisplay(contactInfoForm, false);
        toggleDisplay(additionalForm, false);
        toggleDisplay(paymentInput, false);
        toggleDisplay(success, true);

        nameOrder.innerHTML = fullname.value;
        shippingOrder.innerHTML = document.querySelector(
            'input[name="shippingMethod"]:checked'
        ).nextElementSibling.innerHTML;
        addressOrder.innerHTML = address.value;
        paymentOrder.innerHTML = document.querySelector(
            'input[name="paymentMethod"]:checked'
        ).nextElementSibling.innerHTML;
    }

    document
        .getElementById("continueButton")
        .addEventListener("click", handleContinueClick);
    document
        .querySelector(".change-contact")
        .addEventListener("click", handleChangeContactClick);
    document
        .getElementById("shippingButton")
        .addEventListener("click", handleShippingClick);
    document
        .querySelector(".change-shipping")
        .addEventListener("click", handleChangeShippingClick);
    document
        .querySelector(".placeOrder")
        .addEventListener("click", handlePlaceOrderClick);
</script>
@endsection