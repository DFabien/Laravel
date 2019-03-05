@extends('layouts/layout')

@section('title')
    Ce Produit
@endsection

@section('content')

    <p>{{ $product->name }}</p>
    <p>{{ $product->price / 100 }} €</p>
    <p>{{ $product->descr }}</p>

@endsection

