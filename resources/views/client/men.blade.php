@extends('layouts.client')

@section('title', 'Men Collection')

@section('content')
    <div class="container mt-3">
        @include('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
        <H1>Men</H1>

    </div>
@endsection
