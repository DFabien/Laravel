@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <div class="container">
        <h1 class="titre-principal">Nos produits</h1>
        <div>
            <a href="{{ route('products') }}">Tri par nom</a>
            <a href="{{ route('products', ['sort']) }}">Tri par prix</a>
        </div>

        @foreach($liste as $product)
            <p>{{ $product->name }}</p>
            <p>{{ $product->price / 100 }} €</p>
            <p><a href="{{route('product', ['id' => $product->id ])}}">Detail</a></p>
        @endforeach

    </div>

@endsection
