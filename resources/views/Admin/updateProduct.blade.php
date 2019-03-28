@extends('layouts/admin/layout')

@section('title')
    upPdt
@endsection

@section('content')
    <div class="container">
        <h1 class="titre-principal"> Modify a product </h1>
        <form action={{route('adminEdition', ['modif'=>$articles->id])}} method="post">
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
                <input type="text" id="name" name="name" class="form-control" value="{{$articles->name}}" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label><br>
                <input id="decription" type="text" name="description" class="form-control"
                    value="{{$articles->description}}" required>
            </div>

            <div class="form-group">
                <label for="image">Picture</label><br>
                <input id="photo" type="text" name="photo" class="form-control" value="{{$articles->photo}}">
            </div>

            <div class="form-group">
                <label for="px">Price</label><br>
                <input id="prix" min=0 type="number" name="prix" class="form-control" value="{{$articles->price}}"
                    required>
            </div>

            <div class="form-group">
                <label for="poids">Weight</label><br>
                <input id="weight" min=0 type="number" name="poids" class="form-control" value="{{$articles->weight}}"
                    required>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label><br>
                <input id="stock" min=0 type="number" name="stock" class="form-control" value="{{$articles->stock}}"
                    required>
            </div>

            <div class="form-group">
                <label for="objet">Discount</label><br>
                <select name="categorie" id="category_id">
                    <option value="">Null</option>
                    @foreach ($discounts as $discount)
                        <option value="{{$discount->id}}"
                                @if($discount->id == $articles->discount_id)
                                selected
                                @endif
                        >
                            {{$discount->id}} - {{$discount->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="objet">Category</label><br>
                <select name="categorie" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                                @if($category->id == $articles->category_id)
                                selected
                                @endif
                        > {{$category->id}} - {{$category->category}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" name="ajout" value="Save" class="btn">
            </div>
        </form>
    </div>
    </div>

    <hr class="bas">
    </div>

@endsection