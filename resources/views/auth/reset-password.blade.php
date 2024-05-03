@extends('layouts.client')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-5 pb-2">Enter your email address</h2>
                        <form id="formResetPassword" method="POST" action="{{ route('reset-password') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">RESET PASSWORD</button>
                        </form>
                        <div class="p-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
