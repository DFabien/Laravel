<nav class="navbar navbar-expand-lg navbar-light bg-light AdminNav">
    <a class="navbar-brand" href="#">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminProducts') }}">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminCategories') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Commandes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Codes promo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminDelivery') }}">Livraison</a>
            </li>
        </ul>
    </div>
</nav>