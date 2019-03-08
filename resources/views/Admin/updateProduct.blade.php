@extends('layouts/layout')

@section('title')
    upPdt
@endsection

@section('content')
    <h1 class="titre-principal">Ajouter Produit</h1>

    <form method="post" action="{{route('adminEditPdt',['id'=> $article->id])}}">
        <div class="form-group">
            @method('PUT')
            @csrf
            <label for="nom">Nom de l'article :</label>
            <input  id="nom" type="text" name="nom"  class="form-control" value="{{$article->name}}" required>


            <label for="description">Description du produit :</label>
            <input  id="description" type="text" name="description"  class="form-control" value="{{$article->description}}" required>


            <label for="prix">Prix:</label>
            <input  id="prix" type="number" name="prix"  class="form-control" value="{{$article->price}}" required>

            <label for="weight">weight:</label>
            <input  id="weight" type="number" name="weight"  class="form-control" value="{{$article->weight}}" required>

            <label for="stock_quantity">stock:</label>
            <input  id="stock_quantity" type="number" name="stock_quantity"  class="form-control" value="{{$article->stock_quantity}}" required>

            <label for="category">category:</label>
            <input  id="category" type="number" name="category"  class="form-control" value="{{$article->category}}" required>
        </div>
        <input type="submit" value="valider" >

    </form>
@endsection