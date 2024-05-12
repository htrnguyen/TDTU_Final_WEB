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
                        <form id="formRegister" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control p-2" id="email" name="email"
                                    placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control p-2" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
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
@endsection
{{-- @section('content')
    <div id="app">
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form method="POST" action="{{ route('submit.register') }}" class="action">
                    @csrf
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="" class="icon"></a>
                    </div>
                    <span>Use your email for registration</span>
                    <table>
                        <tr>
                            <th>
                                <input type="text" placeholder="First Name" id="signup-fname" name="firstName" required autofocus />
                            </th>
                            <th>
                                <input type="text" placeholder="Last Name" id="signup-lname" name="lastName" required autofocus />
                            </th>
                        </tr>
                    </table>
                    <input type="text" placeholder="Username" id="signup-user" name="username" required autofocus />
                    <input type="email" placeholder="Email" id="signup-email" name="email" required />
                    <input type="password" placeholder="Password" id="signup-password" name="password" required />
                    <input type="password" placeholder="Confirm Password" id="signup-password-confirmation" name="password-confirmation" required />
                    <input type="text" placeholder="Address" id="signup-address" name="address"  />
                    <input type="text" placeholder="Phone Number" id="signup-phone-number" name="phone-number"  />
                    <p id="messageError"></p>
                    <button type="submit" id="signup-submit-btn">Sign Up</button>
                </form>
            </div>

            <!-- Login -->
            <div class="form-container sign-in">
                <form method="POST" action="{{ route('login.submit') }}" class="action">
                    @csrf
                    <h1>Login</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"></a>
                    </div>
                    <span>Use your email password</span>
                    <input id="email" type="email" placeholder="Email" name="email" required />
                    <input id="password" type="password" placeholder="Password" name="password" required />
                    <div class="remember-forget">
                        <div class="remember-me">
                            <input id="remember-me" type="checkbox" name="remember">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <a href="{{ route('reset-password') }}"> Forgot Password?</a>
                    </div>
                    <button type="submit" id="login-submit-btn">Login</button>
                </form>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>
                            Enter your personal details to use all of site
                            feature
                        </p>
                        <button class="hidden" id="login">Login</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>
                            Register your personal details to use all of site
                            feature
                        </p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('css/client/login.css')}}">
    <script src="{{asset('js/client/login.js')}}"></script>
@endsection --}}
