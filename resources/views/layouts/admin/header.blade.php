<nav class="navbar navbar-expand-lg navbar-light bg-light AdminNav">
    <a class="navbar-brand" href="{{ route('adminHome') }}">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminProducts')}}">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminCategories')}}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminOrders')}}">Commandes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminDiscount')}}">Codes promo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminDelivery')}}">Livraison</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>