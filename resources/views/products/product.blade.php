@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

    <div class="container-fluid">

        @foreach ($liste as $produit)

        <div class="row">
            <div class="col-lg-4 produit">
                
                <img class="images" src="{{ asset("/images/bieres/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price/100}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>          
            </div> 
        </div>

        @endforeach
    </div>

@endsection
