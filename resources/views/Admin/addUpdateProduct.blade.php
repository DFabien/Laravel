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
                <input type="text" class="form-control" id="name" name="name" required value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="descr">Description</label>
                <textarea class="form-control" id="descr" name="descr" required >{{ $product->descr }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control" name="price" id="price" required value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="weight">Poid</label>
                <input type="number" class="form-control" name="weight" id="weight" required value="{{ $product->weight }}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" required value="{{ $product->stock }}">
            </div>
            <div class="form-group">
                <label for="id_category">Catégorie</label>
                <input type="number" class="form-control" name="id_category" id="id_category" required value="{{ $product->id_category }}">
            </div>
            <input type="hidden" value="{{ $product->id}}" name="id">
            <button type="submit" class="ico-button ico-button-green">Submit</button>
        </form>
    </div>


@endsection