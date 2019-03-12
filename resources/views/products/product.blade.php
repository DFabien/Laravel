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
                    <div class="row">
                        <div class="col">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}">
                        </div>
                        <div class="col">
                            <h4>{{ $product->name }}</h4>
                            <h5>{{ $product->price / 100 }} €</h5>
                            <p><a href="{{route('product', ['id' => $product->id ])}}" class="ico-button ico-button-green">Detail</a></p>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>


    </div>

@endsection
