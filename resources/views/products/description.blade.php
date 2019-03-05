@extends('layouts/layout')

@section('title')
    Yoga
@endsection

@section('content')
        <div class="container-fluid">
            <h2 class="titre-secondaire">Yoga</h2>
            <p>{{$produit['0']->name}}</p></br>
            <p>{{$produit['0']->price}}€<p></br>
        </div>

    @endsection

