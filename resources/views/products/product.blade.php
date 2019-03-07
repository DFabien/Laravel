@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <div class="container">
        <h1 class="titre-principal">Nos produits</h1>
        <div class="sort">
            <a href="{{ route('products') }}" class="ico-button ico-button-blue">Tri par nom</a>
            <a href="{{ route('products', ['sort']) }}" class="ico-button ico-button-blue">Tri par prix</a>
        </div>
        <div class="row">
            @foreach($liste as $product)
                <div class="col-4 productList">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->price / 100 }} €</p>
                    <p><a href="{{route('product', ['id' => $product->id ])}}">Detail</a></p>
                </div>
            @endforeach
        </div>


    </div>

@endsection
