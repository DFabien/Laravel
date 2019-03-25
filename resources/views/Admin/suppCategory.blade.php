@extends('layouts/admin/layout')

@section('title')
    suppCtg
@endsection

@section('content')
    <h1>Supprimer une categorie</h1>
    <form action={{route('adminCategoryConfSupp', $a->id) }} method="post">
        @csrf
        @method ('DELETE')

        <label> Confirmer la suppression?<input type="submit"></label>





    </form>

@endsection