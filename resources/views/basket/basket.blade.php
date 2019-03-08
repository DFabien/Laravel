@extends('../layouts/layout')

@section('title')
PANIER
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="titre-principal">Panier</h1>
<div class="row">
    
    <div class="col-lg-4 produit">
        
        <img class="images" src="{{ asset("/images/". $produit->photo)}}" alt="Photo de {{$produit->name}}"/>
    </div>
    <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
        <p>{{$produit->price}}€</p><br>  
    </div> 
    
</div>
@endsection