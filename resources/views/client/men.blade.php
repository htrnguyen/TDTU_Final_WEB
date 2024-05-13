@extends('layouts.client')

@section('title', 'Men Collection')
@section('content')
    <!-- Main Content -->
    <div class="container mt-3">
        <!-- Breadcrumbs -->
        @include('partials.breadcrumbs', ['pages' => ['Home', 'home']])
        <!-- Banner Section -->
        <img src="{{ asset('images/banner/men-banner.jpg') }}" class="img-fluid" alt="Men">
    </div>


    {{-- Load Products --}}
    @include('partials.products', ['products' => $products])
@endsection
