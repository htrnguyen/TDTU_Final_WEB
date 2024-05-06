<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css') }}">
    <title>Admin shoe</title>
</head>
<body>
    <div class="container">
        {{-- Header --}}
        @yield('header-admin')
        {{-- Sidebar-Dashboard-informatiom --}}
        <div class="container-sidebar-child">
            @yield('container-sidebar-dashboard')
        </div>
        {{-- Sidebar main --}}
        <div class="container-sidebar">
            <div class="logo">
                <img src="{{asset('images/logo.png') }}" alt="">
                <p>Shoe Store</p>
            </div>

            <div class="cs-create-new-task">
                <p>Create new task</p>
                <button>
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
            <a href="{{route('home_admin')}}" class="dashboard">
                <i class="fa-solid fa-grip"></i>
                <p>Dashboard</p>
            </a>
            <a href="{{route('product_admin')}}">
                <i class="fa-solid fa-boxes-stacked"></i>
                <p>Product</p> 
            </a>
            <a href="#" class="coupon">
                <i class="fa-solid fa-gift"></i>
                <p>Coupon</p>
            </a>
            <a href="#" class="tasklist">
                <i class="fa-solid fa-bars-progress"></i>
                <p>Task List</p>
            </a>
            <a href="#" class="customer">
                <i class="fa-solid fa-user"></i>
                <p>Customer</p>
            </a>
            <a href="#" class="inbox">
                <i class="fa-solid fa-comment-dots"></i>
                <p>Inbox</p>
            </a>
            <a href="#" class="setting">
                <i class="fa-solid fa-cog"></i>
                <p>Setting</p>
            </a>
        </div>
        {{-- Main --}}
        <main>
            @yield('container-main')
        </main>
        </div>
    </div>
    {{-- Chart-js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('js/admin/dashboard_chart.js') }}"></script>
    <script src="{{asset('js/admin/script.js') }}"></script>
</body>
</html>