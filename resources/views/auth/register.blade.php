@extends('layouts.client')

@section('content')
    <div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-2 pb-2">Create A New Account</h2>
                        <form id="formRegister" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-2">
                                <div class="col">
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="mb-2">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                    required>
                            </div>
                            <div class="mb-2">
                                <span class="text-danger">*</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="mb-2">
                                <span class="text-danger">*</span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="mb-2">
                                <span class="text-danger">*</span>
                                <input type="password" class="form-control" id="password-conformation" name="password-conformation"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="mt-3">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                            <div class="mt-3 mb-3">
                                <input type="text" class="form-control" id="phone-number" name="phone-number" placeholder="Phone Number">
                            </div>
                            <button type="submit" class="btn btn-dark w-100">SIGN UP</button>
                        </form>
                        <div class="text-center mt-3">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
