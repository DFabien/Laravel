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
                <img class="images" src="{{ asset("/images/bieres/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <h1 class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <h1 class="titre-principal"</h1>

            <a class="btn" href="{{route('basketDelete', $produit->id)}}" > Supprimer  </a>
                <input type="number" name="nombres" min="0" max="{{ $produit->stock }}" value="{{'quantity'}}">

            </div>
        </div>
    @endforeach
    
</div>
@endsection