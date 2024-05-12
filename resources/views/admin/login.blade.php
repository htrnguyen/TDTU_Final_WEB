@extends('layouts.admin')
@section('container-main')
    <div id="app">
        <!-- Login -->
        <div class="form-container sign-in">
            <img src="{{asset('images/admin-login.png')}}" alt="">
            <form method="POST" action="{{ route('submit.login_admin') }}" class="action">
                @csrf
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"></a>
                </div>
                <div class="email">
                    <span>Email</span>
                    <input id="email" type="email" placeholder="Email" name="email" required />
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="password">
                    <span>Password</span>
                    <input id="password" type="password" placeholder="Password" name="password" required />
                    <i class="fa-solid fa-eye"></i>
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
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
        }

        form {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 315px;
            animation: popUp 0.8s ease;
        }

        .form-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #fff;
            padding: 20px 10px;
            border-radius: 30px;
            width: 900px;
            height: 500px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container img {
            width: 400px;
            height: 250px;
            object-fit: contain;
            animation: popUp 0.8s ease;
        }

        @keyframes popUp {
            0% {
                transform: scale(0.5);
            }
            60% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
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

        .email i {
            position: absolute;
            right: 20px;
            top: 90px;
        }

        .password i {
            position: absolute;
            right: 20px;
            top: 160px;
            cursor: pointer;
        }
        

        button[type="submit"] {
            margin-top: 15px; 
            padding: 10px;
            width: 300px;
            border: none;
            border-radius: 10px;
            background-color: #8fe61c;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #55bb22;
        }

    </style>
    
    <script>
        const eye = document.querySelector('.fa-eye');
        const password = document.querySelector('#password');
        eye.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                eye.classList.remove('fa-eye');
                eye.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');
            }
        });
    </script>
@endsection
