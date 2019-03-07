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
                <div class="col-lg-8">
                    <p>{{$produit->nom}} </p>
                    <p>{{$produit->price}}€</p>
                    <a href="{{route('product', ['id' => $produit->id_products ])}}">Fiche produit</a>
                    <!-- syntaxe pour appeller une route en blade/php/laravel , les '{{}}' c'est pour dire qu'on est en php -->
                </div>
            </div>
        @endforeach


    </div>

@endsection
