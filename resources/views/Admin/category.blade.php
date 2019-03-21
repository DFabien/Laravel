@extends('layouts/admin/layout')

@section('title')
    Nos Categories de Bières

@endsection

@section('content')
 <a type="button" href={{route('adminCategoryAdd')}}>Ajouter une categorie</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Editer</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody> @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category}}</td>
            <td><i class="fas fa-highlighter"></i></td>
            <td><i class="far fa-trash-alt"></i></td>
        </tr>

        </tbody>@endforeach
    </table>

@endsection