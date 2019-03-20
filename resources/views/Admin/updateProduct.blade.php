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
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label><br>
                    <input  id="decription" type="text" name="description"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="image">Picture</label><br>
                    <input  id="photo" type="text" name="photo"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="px">Price</label><br>
                    <input  id="prix" min=0 type="number" name="prix"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="poids">Weight</label><br>
                    <input  id="weight" min=0 type="number" name="poids"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="stock">Stock</label><br>
                    <input  id="stock" min=0 type="number" name="stock"  class="form-control">
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