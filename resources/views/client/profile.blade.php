// TODO: user profile page
@extends('layouts.client')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>
        <p>Username: {{ $user->username }}</p>
        <!-- Add more user fields as needed -->
    </div>
@endsection
