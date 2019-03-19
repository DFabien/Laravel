@extends('layouts/layout')

@section('title')
    Nos produits
@endsection

@section('content')
    <h1 class="titre-principal">Nos produits</h1>

    <div class="container-fluid">

        <h2 class="titre-secondaire">Yoga</h2>

        @foreach ($liste as $produit)
        @if($produit->id_cat==1)
        <div class="row">
            <div class="col-lg-4 produit">
                
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>          
            </div> 
        </div>
        @endif
        @endforeach

        <h2 class="titre-secondaire">Fitness & Training</h2>
        @foreach ($liste as $produit)
        @if($produit->id_cat==2)
        <div class="row">
            <div class="col-lg-4 produit">
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>          
            </div> 
        </div>
        @endif
        @endforeach

        <h2 class="titre-secondaire">Danse</h2>
        @foreach ($liste as $produit)
        @if($produit->id_cat==3)
        <div class="row">
            <div class="col-lg-4 produit">
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>          
            </div> 
        </div>
        @endif
        @endforeach

        <h2 class="titre-secondaire">Crossfit</h2>
        @foreach ($liste as $produit)
        @if($produit->id_cat==4)
        <div class="row">
            <div class="col-lg-4 produit">
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>          
            </div> 
        </div>
        @endif
        @endforeach

        <h2 class="titre-secondaire">Lifestyle</h2>
        @foreach ($liste as $produit)
        @if($produit->id_cat==5)
        <div class="row">
            <div class="col-lg-4 produit">
                <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
            </div>
            <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
                <p>{{$produit->price}}€</p><br>
                <a class="btn" href="{{route('description', ['id'=>$produit->id])}}"> En savoir plus </a>

            </div>

        </div>
        @endif
        @endforeach

    </div>

@endsection
