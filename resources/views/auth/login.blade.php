@extends('layouts.client')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-5 pb-2">Login</h2>
                        <form id="formLogin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">SIGN IN</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('register') }}" class="text-decoration-none px-3">Create an account</a>
                            <a href="{{ route('reset-password') }}" class="text-decoration-none px-3 text-dark">Forgot your
                                password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
