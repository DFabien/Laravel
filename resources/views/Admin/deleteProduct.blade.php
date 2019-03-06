@extends('layouts/admin/layout')

@section('title')
    Suppression

@endsection

@section('content')
    <div class="container">
        <div class="delete">
            <h1>Voulez vous supprimer le produit :</h1>
            <h2>Id : {{$product->id}} - {{$product->name}}</h2>
            <form action="{{route('adminProductDestroy', ['id' => $product->id])}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer" class="btn btn-danger">
                <a href="{{route('adminProducts')}}" class="btn btn-success">Annuler</a>
            </form>
        </div>
    </div>

@endsection