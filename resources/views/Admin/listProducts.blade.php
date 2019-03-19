@extends('layouts/layout')

@section('title')
    listPdt
@endsection

@section('content')
    
<h1>LISTE DES PRODUITS</h1>

<h1 class="titre-principal"> <a class="btn" href="{{route('adminProductAdd')}}">AJOUTER UN PRODUIT</a></h1>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Category</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody> @foreach ($liste as $produit)
      <tr>
        <td>{{$produit->id}}</td>
        <td>{{$produit->name}}</td>
        <td>{{$produit->price}}</td>
        <td>{{$produit->stock}}</td>
        <td>{{$produit->category->category}}</td>
        <td><button type="button" class="btn btn-dark" href="{{route('adminEdit', $produit->id)}}"></button></td>
        <td><button type="button" class="btn btn-dark" href="{{route('adminProductDelete', $produit->id)}}"></button></td>
      </tr>
      @endforeach </tbody>
  </table>
  
@endsection