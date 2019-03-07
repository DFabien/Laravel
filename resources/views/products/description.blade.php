@extends('layouts/layout')

@section('title')
    Ce Produit
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
            </div>
            <div class="col">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->price / 100 }} €</p>
                <p>{{ $product->description }}</p>
            </div>
        </div>


    </div>


@endsection

