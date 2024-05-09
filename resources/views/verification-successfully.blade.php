@extends('layouts.client')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 shadow-lg rounded rounded-5">
                <div class="m-5">
                    <h1 class="text-center">Email Verification Successful</h1>
                    <p class="text-center">Your email has been successfully verified. You can now log in to your account.</p>
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="btn btn-primary">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
