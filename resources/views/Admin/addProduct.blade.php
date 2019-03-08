@extends('layouts/layout')

@section('title')
    addProd
@endsection

@section('content')
    <form action="{{route('addPdts')}}" method="post">
        @method('PUT')
        @csrf


        <label for="description">Description</label></br>
        <input type="text"  id="description" name="description" class="form-control">

        <label for="price">Prix</label></br>
        <input type="number"  id="price" name="price" class="form-control">

        <label for="weight">Poids</label></br>
        <input type="number" id="weight" name="weight" class="form-control">

        <label for="stock_quantity">Stock</label></br>
        <input type="number"  id="stock_quantity" name="stock_quantity" class="form-control">

        <label for="category">Categorie</label></br>
        <input type="text" id="category" name="category" class="form-control">

        <label for="nom">Nom</label></br>
        <input type="text" id="nom" name="nom" class="form-control">

        <input type="submit">


    </form>

@endsection