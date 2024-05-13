@extends('layouts.base')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center pt-2">
        <div class="col-12 col-md-6">
            <a href=" {{ route('home') }}" class="d-flex align-items-center justify-content-center text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo" width="100">
                <h1 class="text-dark ms-4">Shoe Store</h1>
            </a>
            <div class="card shadow-lg border-0 rounded rounded-3">
                <div class="card-body px-5">
                    <h2 class="card-title text-center pt-2 pb-2">Create A New Account</h2>
                    <form id="formRegister" method="POST" action="{{ route('register.submit') }}">
                        @csrf
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" name="first_name" placeholder="First name" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="text" class="form-control" name=" phone_number" placeholder="Phone number">
                        </div>
                        <button type="submit" class="btn btn-dark w-100 btn-hover">SIGN UP</button>
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
