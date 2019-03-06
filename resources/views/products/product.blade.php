@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

<div class="container-fluide">
    <h2 class="titre-secondaire">Bières Grimbergen</h2>

            @foreach ($products as $produit)
            <div class="row">
                <div class="col-lg-4">></div>
                <div class="col-lg-8">{{$produit->nom}} </br>
                <p>{{$produit->price}}€ <p></br>
                <p>{{$produit ->description}}</p>
                <input type="submit" class="btn" value="Ajouter au panier">            
                </div> 
            </div>
            @endforeach


</div>

@endsection
