<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-2 border">
        <a class="navbar-brand" href="{{ url('/') }}" style="display:flex; justify-content: space-between; align-items:end">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 50px; margin-right: 10px">
            <h3>Shoe Store</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/men') }}">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/women') }}">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/kids') }}">Kids</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="nav-item nav-link fa fa-search"></i>
            </a>

            <a class="nav-item nav-link fas fa-shopping-cart" href="{{ url('/cart') }}"></a>
            <a class="nav-item nav-link fas fa-user" href="{{ url('/login') }}"></a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" style="max-height: 9em">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-5">
                        <form id="search-form" action="{{ route('search') }}" method="GET" class="d-flex justify-content-center">
                            <input type="text" id="search-input" class="form-control border-0 shadow-sm bg-secondary-subtle" placeholder="Search" style="width: 80%; height: 40px;">
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </nav>

</header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('search-form')
        const searchInput = document.querySelector('form #search-input');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const query = searchInput.value;
            if (query.length > 0) {
                fetch(`/search?q=${query}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        const resultsContainer = document.querySelector('.modal-body');
                        resultsContainer.innerHTML = ''; // Clear previous results
                        data.forEach(item => {
                            const div = document.createElement('div');
                            div.textContent = item.name; // Assuming the response has a 'name' field
                            resultsContainer.appendChild(div);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    });
</script>