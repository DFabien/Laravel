@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')


    <div class="container">
        <h1 class="titre-principal">Nos produits</h1>
        <div class="row">
        @foreach ($liste as $produit)

            <div class="col-sm-12 col-md-6 containerListProduit">
                <div class="productList">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset("/images/bieres/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
                        </div>
                        <div class="col flexPosition">
                            <div>
                                <p><strong>{{$produit->name}}</strong></p>
                                <p>{{$produit->price/100}}€</p>
                            </div>
                            <div>
                                <a class="bouton" href="{{route('description', ['id'=>$produit->id])}}">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </div>


    </div>

@endsection
