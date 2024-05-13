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
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-2 pb-2">Login</h2>
                        <form id="formLogin" method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control p-2" id="email" name="email"
                                    placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control p-2" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <p class="messageError text-danger text-center fst-italic"></p>
                            <button type="submit" class="btn btn-dark w-100 btn-hover">SIGN IN</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('register') }}" class="text-decoration-none me-4">Create an
                                account</a>
                            <a href="{{ route('forgot-password') }}" class="text-decoration-none text-dark">Forgot your
                                password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('formLogin').addEventListener('submit', function(event) {
            event.preventDefault();
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            // Check password length
            if (password.length < 8) {
                document.querySelector('.messageError').innerHTML = 'Password must be at least 8 characters';
                return;
            } else {
                document.querySelector('.messageError').innerHTML = '';
            }

            // Check data in database using AJAX request 
            $.ajax({
                url: "{{ route('login.submit') }}",
                type: 'POST',
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status == 'success') {
                        window.location.href = "{{ route('home') }}";
                    } else {
                        document.querySelector('.messageError').innerHTML = response.message;
                    }
                }
            });
        });
    </script>
@endsection
