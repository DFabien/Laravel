@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

    <div class="container-fluide">
        <h2 class="titre-secondaire"></h2>
        <div class="row">
            @foreach ($liste as $produit)


                <div class="col-lg-12"><p>{{$produit->name}}
                        {{$produit->price}}€


                        <a href="{{ route('product', ['id'=>$produit->id] ) }}"> voir la description </a></p>
                </div>
            @endforeach
        </div>

    </div>

@endsection
