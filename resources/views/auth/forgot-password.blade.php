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
                    {{-- Form inout email --}}
                    <h2 class="card-title text-center pt-5 pb-2">Enter your email address</h2>
                    <form id="formForgotPassword" method="POST" action="{{ route('password.forgot.submit') }}">
                        @csrf
                        <div class="mb-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 btn-hover">RESET PASSWORD</button>
                    </form>
                    {{-- Message --}}
                    @if(session('success'))
                    <div class="alert alert-success pt-2">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger pt-2">
                        {{ session('error') }}
                    </div>
                    @endif

                    {{-- Back to login --}}
                    <div class="text-center pt-2">
                        <a href="{{ route('login') }}" class="btn btn-outline-dark text-decoration-none">Back to Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
