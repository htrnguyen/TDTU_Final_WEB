@extends('layouts.client')

@section('content')
<div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-5 pb-2">Create A New Account</h2>
                        <form id="formRegister" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">SIGN UP</button>
                        </form>
                        <div class="text-center mt-3">
                            Already have an account?
                            <a href="{{ route('login')}}" class="text-decoration-none">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
