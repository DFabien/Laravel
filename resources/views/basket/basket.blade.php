@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="titre-principal">Panier</h1>
        <div class="row">

            {{--@foreach($produits as $produit)--}}
            {{--<div>--}}
            {{--<div class="col-lg-4 produit">--}}
            {{--<img class="images" src="{{ asset("/images/bieres/".$produit['produit']->photo)}}" alt="Photo de {{$produit['produit']->name}}"/>--}}

            {{--</div>--}}
            {{--<h1 class="col-lg-8 produit"><strong>{{$produit['produit']->name}}</strong><br>--}}
            {{--<p>{{$produit['produit']->price/100}}€</p><br>--}}
            {{--<h1 class="titre-principal"</h1>--}}

            {{--<a class="btn" href="{{route('basketDelete', $produit['produit']->id)}}" > Supprimer  </a>--}}
            {{--<input type="number" name="nombres" min="0" max="{{ $produit['produit']->stock }}" value="{{$produit['quantity']}}">--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}

            <table class="table panier">
                <thead>
                <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix/U</th>
                    <th scope="col">quantity</th>
                    <th scope="col">Prix Total</th>
                    <th :scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($produits as $produit)

                    <tr>
                        <td>
                            <img class="images" src="{{ asset("/images/bieres/".$produit['produit']->photo)}}"
                                 alt="Photo de {{$produit['produit']->name}}"/>
                        </td>
                        <td>{{$produit['produit']->name}}</td>
                        <td>{{$produit['produit']->description}}</td>
                        <td>{{$produit['produit']->price/100}}€</td>
                        <td>
                            <form action="{{route('basketUpdate', $produit['produit']->id)}}" method="post">
                                @method('PUT')
                                @csrf

                                <input type="number" name="quantity" min="0" max="{{$produit['produit']->stock}}"
                                       value="{{$produit['quantity']}}">
                                <span>
                                    <button type="submit" class="far fa-check-circle"></button>
                                </span>
                            </form>
                        </td>


                        <td>{{($produit['produit']->price/100) * ($produit['quantity'])}}</td>
                        <td>
                            <form action="{{route('basketDelete', $produit['produit']->id)}}" method="post">
                                @method('DELETE')
                                @csrf

                                <span>
                            <button type="button" class="fas fa-trash" data-toggle="modal" data-target="#exampleModal">

                            </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Suppression d'un article</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>Etes vous sûr de vouloir supprimer cet article</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="far fa-times-circle" data-dismiss="modal"></button>
                                            <button type="submit" class="fas fa-check-square"></button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                        </span>
                            </form>
                        </td>


                    </tr>


                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>{{$total}}</b></td>
                </tr>
                </tbody>
            </table>
            <form action="{{route('basketErase')}}" method="post">
                @method('DELETE')
                @csrf

                <span>
                <button type="submit" class="btn btn-primary btn-lg">Vider le Panier</button>

            </span>
            </form>
            {{--{{$total}}--}}
        </div>
@endsection