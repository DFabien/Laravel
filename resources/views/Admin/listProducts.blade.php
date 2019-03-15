@extends('layouts/layout')

@section('title')
    listPdt
@endsection

@section('content')

    <h1 class="titre-principal">Admin Pdts</h1>

    <div class="container-fluide">
        <h2 class="titre-secondaire"></h2>
        <div class="row">
            <p><a href="{{ route('adminProductAdd') }}">
                    <button>Ajouter un produit</button>
                </a></p>
            @foreach ($liste as $produit)


                <div class="col-lg-12">{{$produit->name}}=>
                    {{$produit->description}}=>
                    {{$produit->price}}€
                    <p><a href="{{ route('adminEdit', ['id'=>$produit->id]) }}">
                            <button>Editer</button>

                            <a href="{{route('adminProductDelete',['id'=>$produit->id])}}">
                                <button>Supprimer</button>
                            </a>
                        </a></p>


                    <a href="{{ route('product', ['id'=>$produit->id] ) }}"> </a></p>
                </div>
            @endforeach

        </div>
    </div>
@endsection