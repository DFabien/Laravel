@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

<div class="container-fluide">
    <h2 class="titre-secondaire">Bières Grimbergen</h2>
        <form method="post" action="basket.blade.php">
            @foreach ($liste as $produit)
            <div class="row">
                <div class="col-lg-4"><img src="{{asset ($produit["photo"])}}"></div>
                <div class="col-lg-8">{{$produit ["name"]}} </br>
                <p>{{$produit ["price"]}}€ <p></br>
                <p>{{$produit ["description"]}}</p>
                <input type="submit" class="btn" value="Ajouter au panier">            
                </div> 
            </div>
            @endforeach
        </form>

    <h2 class="titre-secondaire">Bières Du Monde</h2>
        @foreach ($liste as $produit)
        <div class="row">
            <div class="col-lg-4"><img src="{{asset ($produit["photo"])}}"></div>
            <div class="col-lg-8">{{$produit ["name"]}} </br>
            <p>{{$produit ["price"]}}€ <p></br>
            <p>{{$produit ["description"]}}</p>
            <button type="submit" class="btn">Ajouter au panier</button>
            </div>
        </div>
        @endforeach
</div>

@endsection
