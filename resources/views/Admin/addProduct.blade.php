@extends('layouts/admin/layout')

@section('title')
addProd
@endsection

@section('content')
<div class="container">
    <h1 class="titre-principal"> Add a product </h1>
    
    <form action={{route('adminPdtAdd')}} method="post">
        @method('PUT')
        @csrf
        
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach
        @endif
        
        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc">Description</label><br>
            <input  id="decription" type="text" name="description"  class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="image">Picture</label><br>
            <input  id="photo" type="text" name="photo"  class="form-control">
        </div>
        
        <div class="form-group">
            <label for="px">Price</label><br>
            <input  id="prix" min=0 type="number" name="prix"  class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="poids">Weight</label><br>
            <input  id="weight" min=0 type="number" name="poids"  class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="stock">Stock</label><br>
            <input  id="stock" min=0 type="number" name="stock"  class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="objet">Discount</label><br>
            <select name="discount">
                <option value="" disabled="" selected="">Choose</option>
                @foreach ($discounts as $discount)
                <option value="{{$discount->id}}"> {{$discount->name}} </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="objet">Category</label><br>
            <select required name="categorie">
                <option value="" disabled="" selected="">Choose</option>
                @foreach ($categorie as $cat)
                <option value="{{$cat->id}}"> {{$cat->category}} </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <input type="submit" name="ajout" value="Ajouter" class="btn">
        </div>
    </form>
</div>
</div>

<hr class="bas">
</div>

@endsection