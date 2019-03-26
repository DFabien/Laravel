@extends('layouts/admin/layout')

@section('title')
listPdt
@endsection

@section('content')

  <h1>PRODUCTS LIST</h1>

  <p>
    <a type="button" href="{{route('adminProductAdd')}}"><i class="fas fa-cart-plus"></i> 
      Add a product</a>
  </p>
    
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="center">id</th>
        <th scope="col" class="center">Name</th>
        <th scope="col" class="center">Price</th>
        <th scope="col" class="center">Stock</th>
        <th scope="col" class="center">Category</th>
        <th scope="col" class="center">discounts</th>
        <th scope="col" class="center">Update</th>
        <th scope="col" class="center">Delete</th>
      </tr>
    </thead>
    <tbody> @foreach ($liste as $produit)
      <tr>
        <td class="center">{{$produit->id}}</td>
        <td class="center">{{$produit->name}}</td>
        <td class="center">{{$produit->price}}</td>
        <td class="center">{{$produit->stock}}</td>

        <!--si le produit n'a pas de categorie alors afficher "Null"-->
        @if($produit->category)
          <td class="center">{{$produit->category->id}} - {{$produit->category->category}}</td>
        @else
          <td class="center">NULL</td>
        @endif



        <td class="center"> 
          @if($produit->discount)
          {{$produit->discount->id}} - {{$produit->discount->name}}
          @else()NULL
          @endif
        </td>
        <td class="center"><a type="button" href="{{route('adminEdit', $produit->id)}}"><i class="far fa-edit"></i></a></td>
        
        <!-- Button trigger modal -->
        <td class="center"><button type="button" data-toggle="modal" data-target="{{'#modal' . $produit->id}}"><i class="far fa-trash-alt"></i></button></td>
        
        <!-- Modal -->
        <div class="modal fade" id="{{'modal' . $produit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Do you confirm the deletion ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-footer">
                <a type="button" data-dismiss="modal" class="btn btn-secondary">No</a>
                <form action={{route('adminProductDelete', $produit->id)}} method="post"> 
                @method('delete')
                @csrf
                <input type="submit" class="btn btn-primary" value="Yes">
              </form>
            </div>
            </div>
          </div>
        </div>
        </tr>
        @endforeach </tbody>
  </table>
      
@endsection