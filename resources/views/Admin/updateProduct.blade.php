@extends('layouts/layout')

@section('title')
    upPdt
@endsection

@section('content')
<div class="container">
<h1 class="titre-principal"> Modifier un produit </h1>
        <form action={{route('adminEdition', ['modif'=>$modifier->id])}} method="post">
            @method('PUT')
            @csrf
    
        <div class="form-group">
            <label for="name">Désignation</label><br>
        <input type="text" id="name" name="name" class="form-control" value="{{$modifier->name}}">
        </div>
        <div class="form-group">
            <label for="telephone">Description</label><br>
            <input  id="telephone" type="text" name="description"  class="form-control" value="{{$modifier->description}}">
        </div>

        <div class="form-group">
                <label for="telephone">Nom de la photo</label><br>
                <input  id="telephone" type="text" name="photo"  class="form-control" value="{{$modifier->photo}}">
            </div>
    
        <div class="form-group">
            <label for="mail">Prix</label><br>
            <input  id="mail" min=0 type="number" name="prix"  class="form-control" value="{{$modifier->price}}">
        </div>

        <div class="form-group">
                <label for="mail">Poids</label><br>
                <input  id="mail" min=0 type="number" name="poids"  class="form-control" value="{{$modifier->weight}}">
            </div>

            <div class="form-group">
                    <label for="mail">Stock</label><br>
                    <input  id="mail" min=0 type="number" name="stock"  class="form-control" value="{{$modifier->stock}}">
                </div>

            <div class="form-group">
                    <label for="mail">Id Catégorie</label><br>
                    <input  id="mail" min=1 max=5 type="number" name="categorie"  class="form-control" value="{{$modifier->id_cat}}">
                </div>
    
                <div class="form-group">
                        <input type="submit" name="ajout" value="Sauvegarder" class="btn">
                    </div>
        </form>
        </div>
    </div>
    
    <hr class="bas">
    </div>

@endsection