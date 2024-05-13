@extends('layouts.client')

@section('content')
    <div class="container mt-4">
        <div class="row px-5">
            @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])

            <!-- Column 1: Contact Information -->
            <div class="col-md-6 mt-4">
                <h4>Contact Information</h4>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3 text-end">
                        <button href="#" class="btn btn-secondary py-2">Continue to Shipping</button>
                    </div>
                </form>
            </div>

            <!-- Column 2: Order Summary -->
            <div class="col-md-6 px-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-start mb-2">
                            <img src="{{ asset('images/shoe3.jpg') }}" alt="Nike Air Zoom Pegasus 35"
                                style="width: 100px; height: 100px; margin-right: 10px;">
                            <div>
                                <h5 class="card-title">Nike Air Zoom Pegasus 35</h5>
                                <p>Color: Blue</p>
                                <p>Size: M</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="mb-1">Sub total <span class="float-end">$411.00</span></p>
                            <p class="mb-1">Discount <span class="float-end">$0.00</span></p>
                            <hr>
                            <h5>Total <span class="float-end">$411.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
