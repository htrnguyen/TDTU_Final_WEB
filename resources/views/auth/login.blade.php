@extends('layouts.client')

@section('content')
    <div id="app">
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form method="POST" action="{{ route('register') }}" class="action">
                    @csrf
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="" class="icon"></a>
                    </div>
                    <span>Use your email for registration</span>
                    <input type="text" placeholder="Name" id="signup-name" name="name" required autofocus />
                    <input type="email" placeholder="Email" id="signup-email" name="email" required />
                    <input type="password" placeholder="Password" id="signup-password" name="password" required />
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
                        <a href="{{ route('reset-password') }}"> Forgot Password</a>
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
@endsection
