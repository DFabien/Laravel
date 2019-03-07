@extends('layouts/layout')

@section('title')
    addProd
@endsection

@section('content')
<div class="container">
<h1 class="titre-principal"> Ajouter un produit </h1>
        <form action={{route('adminPdtAdd')}} method="post">
            @method('PUT')
            @csrf
    
        <div class="form-group">
            <label for="name">Désignation</label><br>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="telephone">Description</label><br>
            <input  id="telephone" type="text" name="description"  class="form-control">
        </div>

        <div class="form-group">
                <label for="telephone">Nom de la photo</label><br>
                <input  id="telephone" type="text" name="photo"  class="form-control">
            </div>
    
        <div class="form-group">
            <label for="mail">Prix</label><br>
            <input  id="mail" type="number" name="prix"  class="form-control">
        </div>

        <div class="form-group">
                <label for="mail">Poids</label><br>
                <input  id="mail" type="number" name="poids"  class="form-control">
            </div>

            <div class="form-group">
                    <label for="mail">Stock</label><br>
                    <input  id="mail" type="number" name="stock"  class="form-control">
                </div>

            <div class="form-group">
                    <label for="mail">Id Catégorie</label><br>
                    <input  id="mail" type="number" name="categorie"  class="form-control">
                </div>
    
                <div class="form-group">
                        <input type="submit" name="ajout" class="btn">
                    </div>
        </form>
        </div>
    </div>
    
    <hr class="bas">
    </div>

@endsection