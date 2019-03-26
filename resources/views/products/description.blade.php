@extends('layouts/layout')

@section('title')
    Ce Produit
@endsection

@section('content')

    <p>{{$articles->name}} </p>
    <p>{{$articles->price}}€</p>

    @endsection

