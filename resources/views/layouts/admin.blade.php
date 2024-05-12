<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css') }}">
    <title>Admin shoe</title>
</head>

<body>
    <div class="container">
        @if(!request()->is('admin/login'))
        @yield('header-admin')
        <div class="container-sidebar-child">
            @yield('container-sidebar-dashboard')
        </div>
        @include('partials.adminsidebar')
        @endif
        <main>
            @yield('container-main')
            <div class="mask-logout" id="mask-logout"></div>
            <div id="confirmDialog" class="confirmDialog">
                <p>Are you sure logout?</p>
                <div class="confirmDialog-content">
                    <button id="confirmLogout" class="confirmDialog-button">Logout</button>
                    <button id="cancelLogout" class="confirmDialog-button">Cancel</button>
                </div>
            </div>
        </main>
    </div>
</body>
<script>
    function logout(event) {
        event.preventDefault();
        document.getElementById('confirmDialog').style.visibility = 'visible';
        document.getElementById('mask-logout').style.visibility = 'visible';
        document.getElementById('confirmLogout').addEventListener('click', function() {
            window.location.href = "{{route('login_admin')}}";
        });
        document.getElementById('cancelLogout').addEventListener('click', function() {
            document.getElementById('confirmDialog').style.visibility = 'hidden';
            document.getElementById('mask-logout').style.visibility = 'hidden';
        });
    }
</script>
<script src="asset('js/admin/script.js')"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
</html>