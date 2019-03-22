@extends('layouts/layout')

@section('title')
    addCat
@endsection

@section('content')
    <h1>Ajouter une Categorie</h1>
    <form method="post" action={{route('adminCategoryStore')}}>
        @csrf <!--permet que le formulaire garde la session -->
        <label>Nom: </label> <input type="text" name ="nom" >
        <input type="submit" name="Confirmer" value="ajouter">

    </form>
@endsection