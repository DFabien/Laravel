@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="topPageBasket topBasketPage">
        <div class="container">
            <div class="row">
                <div class="TopContent col-lg-6 col-sm-12">
                    <h3>SquirrelBeers</h3>
                    <h1>MON PANIER</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table panier">
                <thead>
                <tr>
                    <th :scope="col"></th>
                    <th :scope="col"></th>
                    <th scope="col">Produit</th>
                    <th scope="col">Prix</th>
                    <th scope="col">quantité</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produits as $produit)
                    <tr>
                        <td>
                            <form action="{{route('basketDelete', $produit['produit']->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="button" class="far fa-times-circle" data-toggle="modal"
                                        data-target="{{'#modal' . $produit['produit']->id }}"></button>

                                @include ('layouts.modalDelete')
                            </form>

                        </td>
                        <td>
                            <img class="images" src="{{ asset("/images/bieres/".$produit['produit']->photo)}}"
                                 alt="Photo de {{$produit['produit']->name}}"/>
                        </td>
                        <td>
                            {{$produit['produit']->name}}
                        </td>
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

                    </tr>
                @endforeach

                <tr>
                    <td>
                        @if(!empty($produits))
                            <form action="{{route('basketErase')}}" method="post">
                                @method('DELETE')
                                @csrf
                                    <button type="button" class="far fa-times-circle" data-toggle="modal" data-target="#exampleModal1"></button>
                                @include ('layouts/modalErase')

                            </form>
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>{{$total}} €</b></td>
                </tr>
                </tbody>
            </table>

        </div>
        @if(!empty($produits))
            <form action="{{ route('basketSave') }}" method="POST" class="right">
                @csrf
                <input type="submit" value="Valider la commande" class="basketValidation">
            </form>
        @endif
    </div>
@endsection