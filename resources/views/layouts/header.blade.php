<nav class="navbar navbar-expand-lg navbar-dark bg-light headerNav">
    <a class="navbar-brand" href="/">Craft Beers</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('products')}}">Nos produits</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="{{route('basket')}}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="{{route('basket')}}">Mon panier</a>
            </li>
        </ul>
    </div>
</nav>