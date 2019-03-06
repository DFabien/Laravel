@extends('layouts/admin/layout')

@section('title')
    Liste produits
@endsection

@section('content')
    <div class="container">
        <p class="addButton"><a href="{{ route('adminProductAdd') }}" class="ico-button ico-button-green"><i class="fas fa-plus"></i>  Ajouter un produit</a></p>

        <table class="table">
            <tr>
                <th>Nom</th>
                <th class="center">id</th>
                <th class="center">Stock</th>
                <th class="center">Editer</th>
                <th class="center">Supprimer</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="center">{{ $product->id }}</td>
                    <td class="center">{{ $product->stock }}</td>
                    <td class="center">
                        <a href="{{route('adminEdit', ['id' =>$product->id ])}}" class="ico-button ico-button-blue"><i class="fas fa-edit"></i</a>
                    </td>
                    <td class="center">
                        <a href="{{route('adminProductDelete', ['id' =>$product->id ])}}" class="ico-button ico-button-red"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach

        </table>


    </div>
@endsection