<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-2 border">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/Mike.webp') }}" alt="Logo" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/men') }}">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/women') }}">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kids') }}">Kids</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link fas fa-search" href="#"></a>
            <a class="nav-item nav-link fas fa-shopping-cart" href="#"></a>
            <a class="nav-item nav-link fas fa-user" href="{{ url('/login') }}"></a>
        </div>
    </nav>
</header>
