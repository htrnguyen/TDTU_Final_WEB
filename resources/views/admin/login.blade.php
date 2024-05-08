@extends('layouts.admin')
@section('container-main')
    <div id="app">
        <!-- Login -->
        <div class="form-container sign-in">
            <form method="POST" action="#" class="action">
                @csrf
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"></a>
                </div>
                <div class="email">
                    <span>Email</span>
                    <input id="email" type="email" placeholder="Email" name="email" required />
                </div>
                <div class="password">
                    <span>Password</span>
                    <input id="password" type="password" placeholder="Password" name="password" required />
                </div>
                <button type="submit" id="login-submit-btn">Login</button>
            </form>
        </div>
    </div>
    <style>
        #app {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to right, #d2f99e, #ccf9cc);
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 350px;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 10px;
            border-radius: 15px
        }

        form input {
            width: 300px;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .email, .password {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        button[type="submit"] {
            margin-top: 15px; 
            padding: 10px;
            width: 300px;
            border: none;
            border-radius: 10px;
            background-color: #c2ff72;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #a2ff72;
        }

    </style>
@endsection
