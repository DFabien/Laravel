@extends('layouts/layout')

@section('title')
    nos produits
@endsection

@section('content')
    <h1>Nos produits</h1>

    @foreach ($liste as $produit)
    <p>{{$produit ["name"]}}</p>
    <p>{{$produit ["price"]}}</p>
    <img src="{{asset ($produit["photo"])}}" >
    @endforeach
@endsection
