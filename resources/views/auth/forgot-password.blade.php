@extends('layouts.client')

@section('content')
    <div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        {{-- Form inout email --}}
                        <form id="formForgotPassword" method="POST" action="{{ route('forgot-password') }}">
                            <h2 class="card-title text-center pt-5 pb-2">Enter your email address</h2>
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">RESET PASSWORD</button>
                            <div class="p-2"></div>
                        </form>
                        {{-- Message --}}
                        <div id="message" class="alert alert-success text-center d-none" role="alert">
                            <h4 class="alert-heading">Email sent</h4>
                            <p>
                                We have sent you an email with instructions on how to reset your password.
                            </p>
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
            event.preventDefault(); // Ngăn không cho form gửi đi theo cách thông thường
            // Ẩn form đi
            form.classList.add("d-none");
            // Hiển thị thông báo
            message.classList.remove("d-none");
        });
    });
</script>
