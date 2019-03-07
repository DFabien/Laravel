@extends('layouts/layout')

@section('title')
    Ce Produit
@endsection

@section('content')

    <p>{{$products->nom}} </p>
    <p>{{$products->price}}€</p>

    @endsection

