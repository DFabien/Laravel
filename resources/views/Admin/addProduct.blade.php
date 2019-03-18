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
            <label for="desc">Description</label><br>
            <input  id="decription" type="text" name="description"  class="form-control">
        </div>

        <div class="form-group">
                <label for="image">Nom de la photo</label><br>
                <input  id="image" type="text" name="photo"  class="form-control">
            </div>
    
        <div class="form-group">
            <label for="px">Prix</label><br>
            <input  id="prix" min=0 type="number" name="prix"  class="form-control">
        </div>

        <div class="form-group">
                <label for="poids">Poids</label><br>
                <input  id="poids" min=0 type="number" name="poids"  class="form-control">
            </div>

            <div class="form-group">
                    <label for="stock">Stock</label><br>
                    <input  id="stock" min=0 type="number" name="stock"  class="form-control">
                </div>

            <div class="form-group">
                    <label for="categorie">Id Catégorie</label><br>
                    <input  id="categorie" min=1 max=5 type="number" name="categorie"  class="form-control">
                </div>
    
                <div class="form-group">
                        <input type="submit" name="ajout" value="Ajouter" class="btn">
                    </div>
        </form>
        </div>
    </div>
    
    <hr class="bas">
    </div>

@endsection