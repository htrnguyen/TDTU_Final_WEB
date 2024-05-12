@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6">
                <a href=" {{ route('home') }}" class="d-flex align-items-center justify-content-center text-decoration-none">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo" width="100">
                    <h1 class="text-dark ms-4">Shoe Store</h1>
                </a>
                <div class="card shadow-lg border-0 rounded rounded-3">
                    <div class="m-5">
                        <h1 class="text-center">Email Verification Successful</h1>
                        <p class="text-center">Your email has been successfully verified. You can now log in to your
                            account.</p>
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="btn btn-dark">Return to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
