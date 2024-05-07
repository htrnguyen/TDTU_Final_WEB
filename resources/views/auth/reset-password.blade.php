@extends('layouts.client')

@section('content')
    <div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        {{-- Form inout email --}}
                        <form id="formForgotPassword" method="POST" action="{{ route('reset-password') }}">
                            <h2 class="card-title text-center pt-5 pb-2">Enter your email address</h2>
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">RESET PASSWORD</button>
                            <div class="p-2"></div>
                        </form>

                        {{-- Form Reset Password --}}
                        <form class="d-none" id="formResetPassword" method="POST" action="{{ route('reset-password') }}">
                            <h2 class="card-title text-center pt-5 pb-2">Reset Your Password</h2>
                            @csrf
                            <div class="mb-3">
                                <input type="newpassword" class="form-control" id="newpassword" name="newpassword"
                                    placeholder="New Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="confirmpassword" class="form-control" id="confirmpassword"
                                    name="confirmpassword" placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">RESET PASSWORD</button>
                            <div class="p-2"></div>
                        </form>


                        <div id="message" class="alert alert-success d-none" role="alert">
                            <p class="text-center">Your password has been successfully reset. <br> You can now <a
                                    href="{{ route('login') }}">log in</a> with your new password.</p>
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
        const formRest = document.getElementById("formResetPassword");
        const message = document.getElementById("message");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Ngăn không cho form gửi đi theo cách thông thường
            // Ẩn form đi
            form.classList.add("d-none");
            // Hiển thị form reset
            formRest.classList.remove("d-none");
        });

        formRest.addEventListener("submit", function(event) {
            event.preventDefault(); // Ngăn không cho form gửi đi theo cách thông thường
            // Ẩn form đi
            formRest.classList.add("d-none");
            // Hiển thị thông báo
            message.classList.remove("d-none");
        });
    });
</script>
