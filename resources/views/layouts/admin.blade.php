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
           @include('partials.adminsidebar')
        {{-- Main --}}
        <main>
            @yield('container-main')
        </main>
        </div>
    </div>
    {{-- Chart-js --}}
</body>
</html>