@php
use Illuminate\Support\Facades\Auth;
@endphp
<header class="border">
    <nav class="px-5 py-2 d-flex justify-content-between navbar navbar-expand-lg" style="background-color: #f5f5f5;">
        <a class="text-decoration-none text-black fw-bold" href="{{ route('home') }}">Shoes store</a>
        <div class="navbar-nav">
            @auth
            <a class="nav-item m-auto text-dark" href="{{ route('profile', ['username' => @auth::user()->username]) }}">Hi, <strong>{{ @auth::user()->first_name . ' ' . @auth::user()->last_name }}</strong></a>
            <a class="text-dark fa-regular fa-user fs-5 ms-2" href="{{ route('profile', ['username' => @auth::user()->username]) }}"></a>
            @else
            <a class="nav-item m-auto text-dark me-3" href="{{ route('register') }}">Sign up</a>
            <a class="nav-item m-auto text-dark" href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg px-5 d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between flex-grow-1">
            {{-- Part 1 --}}
            <div class="ms-3 me-auto" style="flex: 1;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" height="60" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            {{-- Part 2 --}}
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark me-4 fw-bold" href="{{ route('home') }}">New & Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-4 fw-bold" href="{{ route('men') }}">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-4 fw-bold" href="{{ route('women') }}">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-4 fw-bold" href="{{ route('kids') }}">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-4 fw-bold" href="{{ route('sale') }}">Sale</a>
                    </li>
                </ul>
            </div>
            {{-- Part3 --}}
            <div class="navbar-nav ms-auto" style="flex: 1;">
                <div class="input-group m-auto me-2 ">
                    <button class="btn btn-outline-secondary rounded-start-pill no-border py-2" type="button" id="button-addon2" style="background-color: #f5f5f5">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" class="form-control rounded-end-pill no-border" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" style="background-color: #f5f5f5">
                </div>

                <a class="nav-item nav-link fas fa-shopping-cart m-auto fs-4" href="{{ route('cart') }}"></a>
            </div>
        </div>
    </nav>
</header>

<style>
    a {
        text-decoration: unset;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('search-form');
    });
</script>