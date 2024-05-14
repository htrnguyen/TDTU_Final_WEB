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
                    <div id="message" class="alert alert-success text-center d-none" role="alert">
                        <h4 class="alert-heading">Email sent</h4>
                        <p>
                            We have sent you an email with instructions on how to reset your password.
                        </p>
                    </div>
                    {{-- Back to login --}}
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("formForgotPassword");
        const message = document.getElementById("message");

        form.addEventListener("submit", function(event) {
            // Ẩn form đi
            form.classList.add("d-none");
            // Hiển thị thông báo
            message.classList.remove("d-none");
        });
    });
</script>