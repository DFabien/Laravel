@extends('../layouts/layout')

@section('title')
PANIER
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="titre-principal">Panier</h1>
<div class="row">
    
    @foreach ($produits as $produit)
        <img src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/><br>
        {{$produit->name}} <br>
        {{$produit->price}} € <br>
        
    @endforeach
    
</div>
@endsection