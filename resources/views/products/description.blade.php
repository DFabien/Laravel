@extends('layouts/layout')

@section('title')
    {{$produit->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row productDetail">
            <div class="col-lg-6 produit center">
                <img class="image" src="{{asset("/images/bieres/".$produit->photo)}}" alt="Photo de "/>
            </div>
            <div class="col-lg-6 descritption">
                <h5>{{$produit->category->category}}</h5>
                <h3><strong>{{$produit->name}}</strong></h3>
                <p>{{$produit->description}}</p>
                <h4>{{$produit->price/100}} €</h4>

                <form action="{{route('basketAdd', $produit->id)}}" method="post">
                    @method('PUT')
                    @csrf

                    <input type="number" name="quantity" min="0" max="{{$produit->stock}}" value="1" class="inputProduct">
                    <input type="submit" value="Ajouter au panier" class="submitProduct">
                </form>
            </div>
        </div>
    </div>
@endsection
