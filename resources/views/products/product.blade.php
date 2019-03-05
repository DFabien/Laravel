@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

<div class="container-fluid">
    <h2 class="titre-secondaire">Yoga</h2>
            @foreach ($liste as $produit)
            <div class="row">
                <div class="col-lg-8">{{$produit->name}}</br>
                <p>{{$produit->price}}€<p></br>
                <a href="{{route('description', ['id'=>$produit->id_article])}}"  > En savoir plus  </a>          
                </div> 
            </div>
            @endforeach
</div>

@endsection
