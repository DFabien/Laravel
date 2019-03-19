@extends('layouts/layout')

@section('title')
    Accueil
@endsection

@section('content')

    <div class="topHomePage">
        <div class="container">
            <div class="row">
                <div class="homeTopContent col-lg-6 col-sm-12">
                    <h3>SquirrelBeers</h3>

                    <h1>Craft Beer ShopCave à bières artisanales</h1>

                    <p>Notre souhait, vous faire découvrir le meilleur des bières artisanales françaises et étrangères.
                        Venez découvrir nos 400 références en boutique et notre sélection de bouteilles et canettes en
                        ligne. Livraison entre 24 et 72h ou retrait à la cave.
                    </p>
                    <a href="{{ route('products') }}">Voir les produits</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="brasseries">
            <h4>Nos brasseries</h4>
            <div class="row">
                <div class="col">
                    <div>
                        <img src="{{asset('images/brasseries/lostabbey.png')}}" alt="lost abbey">
                        <h5>The Lost Abbey</h5>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="{{asset('images/brasseries/portbrewing.png')}}" alt="PortBrewing">
                        <h5>Port Brewing</h5>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="{{asset('images/brasseries/jesterking.png')}}" alt="jester king">
                        <h5>Jester King</h5>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="{{asset('images/brasseries/brewdog.png')}}" alt="BrewDog">
                        <h5>BrewDog</h5>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="{{asset('images/brasseries/bosteels.png')}}" alt="Bosteels">
                        <h5>Bosteels</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>






@endsection

