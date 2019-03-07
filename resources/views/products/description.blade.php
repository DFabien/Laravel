@extends('layouts/layout')

@section('title')
    Yoga
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="titre-principal">Description</h1>

        <div class="row">
            <div class="col-lg-6 produit">
                <img class="image" src="{{asset("/images/".$produit->photo)}}" alt="Photo de "/>
            </div>
            <div class="col-lg-6 desc">
                <h3>{{$produit->name}}</h3><br>
                <p>{{$produit->description}}</p><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('basket')}}" > Ajouter au panier  </a>
            </div>
        </div>
    </div>
@endsection

