@extends('layouts/layout')

@section('title')
    Yoga
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="titre-principal">Description</h1>

        <div class="row">
            <div class="col-lg-6 produit">
                <img class="image" src="{{asset("/images/".$produit['0']->photo)}}" alt="Photo de "/>
            </div>
            <div class="col-lg-6 desc">
                <h3>{{$produit['0']->name}}</h3></br>
                <p>{{$produit['0']->description}}</p></br>
                <p>{{$produit['0']->price}}€</p></br>
            </div>
        </div>
    </div>
@endsection

