@extends('layouts.client')

@section('title', 'Kids Collection')
@section('content')
    <!-- Main Content -->
    <div class="container mt-3">
        <!-- Breadcrumbs -->
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
        <!-- Banner Section -->
        <img src="{{ asset('images/banner/kids-banner.jpg') }}" class="img-thumbnail banner no-border" alt="Kids">
    </div>

    @include('partials.products', ['products' => $products])
@endsection
