@extends('layouts/admin/layout')

@section('title')
    Ajout produit
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('adminProductStore') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="descr">Description</label>
                <textarea class="form-control" id="descr" name="descr" required ></textarea>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="weight">Poid</label>
                <input type="number" class="form-control" name="weight" id="weight" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" required>
            </div>
            <div class="form-group">
                <label for="id_category">Catégorie</label>
                <input type="number" class="form-control" name="id_category" id="id_category" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection