@extends('layouts/layout')

@section('title')
    listPdt
@endsection

@section('content')
    
<h1 class="titre-principal"> <a class="btn" href="{{route('adminProductAdd')}}">AJOUTER UN PRODUIT</a></h1>

@foreach ($liste as $produit)
<div class="row">
    <div class="col-lg-4 produit">
        <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
    </div>
    <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
        <p>{{$produit->price}}€</p><br>  
        <h1 class="titre-principal"><a class="btn" href="{{route('adminEdit', $produit->id)}}">Modifier</a></h1>
    
    </div> 
</div>
@endforeach
<h1 class="titre-principal"><a class="btn" href="{{route('adminProductAdd')}}">AJOUTER UN PRODUIT</a></h1>

@endsection