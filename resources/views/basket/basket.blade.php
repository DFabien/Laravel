@extends('../layouts/layout')

@section('title')
PANIER
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="titre-principal">Panier</h1>
<div class="row">
    
    @foreach($produits as $produit)
        <div>
            <div class="col-lg-4 produit">
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <h1 class="titre-principal"><a class="btn" href="{{route('adminEdit', $produit->id)}}">Modifier</a>
                    <a class="btn" href="{{route('adminProductDelete', $produit->id)}}">Supprimer</a></h1>

            </div>
        </div>
    @endforeach
    
</div>
@endsection