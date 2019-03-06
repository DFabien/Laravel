@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

    <div class="container-fluide">
        <h2 class="titre-secondaire"></h2>

            @foreach ($liste as $produit)
                <div class="row">

                    <div class="col-lg-8">{{$produit->name}} </br>
                        <p>{{$produit->price}}€</p>


                            <a href="{{ route('product', ['id'=>$produit->id] ) }}"> voir la description </a>
                    </div>
                </div>
            @endforeach

    </div>

@endsection
