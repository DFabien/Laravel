@extends('layouts/layout')

@section('title')
    {{$produit->name}}
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="titre-principal">Description</h1>

        <div class="row">
            <div class="col-lg-6 produit">
                <img class="image" src="{{asset("/images/bieres/".$produit->photo)}}" alt="Photo de "/>
            </div>
            <div class="col-lg-6 desc">
                <h3>{{$produit->name}}</h3><br>
                <p>{{$produit->description}}</p><br>
                <p>{{$produit->price/100}}€</p><br>

                <form action="{{route('basketAdd', $produit->id)}}" method="post">
                    @method('PUT')
                    @csrf

                    <input type="number" name="quantity" min="0" max="{{$produit->stock}}" value="1">
                    <input type="submit" value="Ajouter au panier">
                </form>
            </div>
        </div>
    </div>
@endsection
