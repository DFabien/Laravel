@extends('layouts/layout')

@section('title')
    addCat
@endsection

@section('content')
    <h1>Ajouter une Categorie</h1>
    <form method="post" action="toto.php">
        <label>Nom: </label> <input type="text" name ="nom" >
        <input type="submit" name="Confirmer" value="ajouter">

    </form>
@endsection