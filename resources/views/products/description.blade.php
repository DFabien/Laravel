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
                <form action="{{route('basketAdd')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">
                            <input type="number" name="quantity" value="{{ $value }}" class="form-control">
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}" >
                        <div class="col">
                            <input type="submit" value="Ajouter au panier" class="ico-button ico-button-green">
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>


@endsection

