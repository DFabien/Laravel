@extends('layouts/layout')

@section('title')
    listPdt
@endsection

@section('content')
    
<a class="btn" href="{{route('adminProductAdd')}}">AJOUTER UN PRODUIT</a>    

@foreach ($liste as $produit)
<div class="row">
    <div class="col-lg-4 produit">
        <img class="images" src="{{ asset("/images/".$produit->photo)}}" alt="Photo de {{$produit->name}}"/>
    </div>
    <div class="col-lg-8 produit"><strong>{{$produit->name}}</strong><br>
        <p>{{$produit->price}}€</p><br>     
    </div> 
</div>
@endforeach

@endsection