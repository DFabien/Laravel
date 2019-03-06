@extends('layouts/admin/layout')

@section('title')
    Liste produits
@endsection

@section('content')
    <div class="container">
        <p><a href="{{ route('adminProductAdd') }}" class="button">➕ Ajouter un produit</a></p>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>id</th>
                <th>stock</th>
                <th>actions</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach

        </table>


    </div>
@endsection