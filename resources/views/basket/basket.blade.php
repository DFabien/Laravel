@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="titre-principal">Panier</h1>
        <div class="row">

            <table class="table panier">
                <thead>
                <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix/U</th>
                    <th scope="col">quantity</th>
                    <th scope="col">Prix Total</th>
                    <th :scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($produits as $produit)

                    <tr>
                        <td>
                            <img class="images" src="{{ asset("/images/bieres/".$produit['produit']->photo)}}"
                                 alt="Photo de {{$produit['produit']->name}}"/>
                        </td>
                        <td>{{$produit['produit']->name}}</td>
                        <td>{{$produit['produit']->description}}</td>
                        <td>{{$produit['produit']->price/100}}€</td>
                        <td>

                            <form action="{{route('basketUpdate', $produit['produit']->id)}}" method="post">
                                @method('PUT')
                                @csrf

                                <input type="number" name="quantity" min="0" max="{{$produit['produit']->stock}}"
                                       value="{{$produit['quantity']}}">
                                <span>
                                    <button type="submit" class="far fa-check-circle"></button>
                                </span>
                            </form>
                        </td>

                        <td>{{($produit['produit']->price/100) * ($produit['quantity'])}}€</td>
                        <td>
                            <form action="{{route('basketDelete', $produit['produit']->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="button" class="fas fa-trash" data-toggle="modal"
                                        data-target="{{'#modal' . $produit['produit']->id }}"></button>
                                @include ('layouts.modalDelete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>{{$total}} €</b></td>
                </tr>
                </tbody>
            </table>
            <form action="{{route('basketErase')}}" method="post">
                @method('DELETE')
                @csrf
                <p>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal1">Vider le Panier</button></p>
                    @include ('layouts/modalErase')
               </p>
            </form>
        </div>
        @if(Auth::user())
            <a href="{{ route('infos') }}" class="btn-ico btn-ico-green">Valider la commande</a>
            @else
            <p>Veuillez-vous connecter ou créer un compte pour finaliser la commande</p>
            <p><a href="{{ route('login') }}" class="btn-ico btn-ico-blue">Se connecter</a> <a href="{{ route('register') }}" class="btn-ico btn-ico-blue">Créer un compte</a></p>
        @endif

    </div>
@endsection