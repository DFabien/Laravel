@extends('layouts/layout')

@section('title')
Accueil
@endsection

@section('content')

<div class="topPage topHomePage">
    <div class="container">
        <div class="row">
            <div class="TopContent col-lg-6 col-sm-12">
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
            <div class="frame">
                <div class="container-fluid">
                    <div class="row">
                        <div class="backdrop"></div>
                        <div class="col-4 pic pic-1">
                            <img src="{{asset('images/brasseries/lostabbey1.jpg')}}" alt="lost abbey">
                            <div class="overlay"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="col-4 pic pic-2">
                            <img src="{{asset('images/brasseries/portbrewing1.jpg')}}" alt="PortBrewing">
                            <div class="overlay"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="col-4 pic pic-3">
                            <img src="{{asset('images/brasseries/jesterking1.jpg')}}" alt="jester king">
                            <div class="overlay"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="col-4 pic pic-4">
                            <img src="{{asset('images/brasseries/brewdog1.jpg')}}" alt="BrewDog">
                            <div class="overlay"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="col-4 pic pic-5">
                            <img src="{{asset('images/brasseries/bosteels1.jpg')}}" alt="Bosteels">
                            <div class="overlay"><i class="fas fa-plus"></i></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

