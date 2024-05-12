<header class="border">
    <nav class="px-5 py-2 d-flex justify-content-between navbar navbar-expand-lg" style="background-color: #f5f5f5;">
        <div class="text-black">Shoes Store</div>
        <div class="navbar-nav">
            <p class="nav-item m-auto">Hi, Username</p>
            <a class="text-dark fa-regular fa-user fs-5 ms-2" href="{{ url('/login') }}"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg px-5 d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between flex-grow-1">
            {{-- Part 1 --}}
            <div class="ms-3 me-auto" style="flex: 1;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" height="60" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            {{-- Part 2 --}}
            <div class="collapse navbar-collapse d-flex justify-content-center ps-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('#') }}">New & Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/men') }}">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/women') }}">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/kids') }}">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('#') }}">Sale</a>
                    </li>
                </ul>
            </div>
            {{-- Part3 --}}
            <div class="navbar-nav ms-auto" style="flex: 1;">
                <div class="input-group m-auto me-2 ">
                    <button class="btn btn-outline-secondary rounded-start-pill no-border py-2" type="button"
                        id="button-addon2" style="background-color: #f5f5f5">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" class="form-control rounded-end-pill no-border" placeholder="Search"
                        aria-label="Search" aria-describedby="button-addon2" style="background-color: #f5f5f5">
                </div>
                
                <a class="nav-item nav-link fas fa-shopping-cart m-auto fs-4" href="{{ url('/cart') }}"></a>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('search-form');
    });
</script>
