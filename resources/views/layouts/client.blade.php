<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Shoe Store')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/client/custom.css') }}">
</head>

<body class="{{ request()->is('login') ? '' : 'd-flex flex-column min-vh-100' }}">
    {{-- Không sử dụng header khi ở trang đăng nhập hoặc đăng kí hoặc reset-password --}}
    @if(!request()->is('login') && !request()->is('register') && !request()->is('reset-password')) 
        @include('partials.header')
    @endif

    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Không sử dụng footer khi ở trang đăng nhập hoặc đăng kí --}}
    @if(!request()->is('login') && !request()->is('register') && !request()->is('reset-password'))
        @include('partials.footer') 
    @endif


    <script src="{{ asset('js/client/custom.js') }}"></script>
</body>

</html>
