@extends('layouts/layout')

@section('title')
    Ce Produit
@endsection

@section('content')
    <h1 class="titre-principal">Detail produit</h1>

    <div class="container-fluide">
        <h2 class="titre-secondaire"></h2>


                <div class="row">

                    <div class="col-lg-8">{{$produit->nom}} </br>
                        <p>{{$produit->price}}€</p>

                        <p>{{$produit->description}}</p>

                    </div>
                </div>

        </form>


    </div>

@endsection


