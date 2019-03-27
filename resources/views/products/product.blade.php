@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')

    <div class="topPage topProductPage">
        <div class="container">
            <div class="row">
                <div class="TopContent col-lg-6 col-sm-12">
                    <h3>SquirrelBeers</h3>

                    <h1>Achetez vos bières artisanales en ligne</h1>

                    <p>Une idée cadeau originale pour un anniversaire, pour noël. Une envie de se faire plaisir. Un bon repas avec des amis… Les occasions ne manquent pas.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="selecteur">
            <a href="{{ route('products') }}" @if($selected == "name")class="btnTriSelected"@else class="btnTri" @endif>Trier par nom</a>
            <a href="{{ route('products', ['sort']) }}" @if($selected == "price")class="btnTriSelected"@else class="btnTri" @endif>Trier par prix</a>
        </div>
        <div class="row">
            @foreach ($liste as $produit)
                <div class="col-lg-4 col-sm-6 col-12 productList">
                    <div class="products">
                        <div class="center productImg">
                            <img src="{{ asset("/images/bieres/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
                        </div>
                        <div class="productName">
                            <h5 class="center"><strong>{{$produit->name}}</strong></h5>
                        </div>
                        <div>
                            <div class="productPrice">
                                <p class="center">{{$produit->price/100}}€</p>
                            </div>
                            <div class="productLink">
                                <a href="{{route('description', ['id'=>$produit->id])}}">Acheter</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
       </div>

@endsection
