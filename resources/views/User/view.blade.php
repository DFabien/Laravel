@extends ('layouts.layout')
@section('title')
    Mon compte
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">Mon compte</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-profile" aria-selected="false">Mes adresses</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                   aria-controls="v-pills-messages" aria-selected="false">Mes commandes</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    {{-- @if ($user->customer)
                        <h1>Nom: {{Auth::User()->customer->name }}</h1>
                        <h2>Prénom: {{Auth::User()->customer->first_name }}</h2>
                        @endif --}}
                    <form action={{route('saveUpdate')}} method="post">
                        @method('PUT')
                        @csrf

                        {{-- @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                            @endforeach
                            @endif --}}
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault01">Prénom</label>
                                <input type="text" class="form-control" id="name" placeholder="Prénom" name="first_name"
                                       value="{{Auth::User()->customer->first_name}}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Nom</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Nom" name="name"
                                       value="{{Auth::User()->customer->name}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefaultUsername">Adresse mail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           placeholder="mail" aria-describedby="inputGroupPrepend2" name="email"
                                           value="{{Auth::User()->email}}" required>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Modifier mes informations">
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <form action={{route('updateAddress')}} method="post">
                        @method('PUT')
                        @csrf
                        @if(Auth::User()->customer)
                            @if(count(Auth::User()->customer->addresses) != 0)
                                <table class="table">
                                    @foreach(Auth::User()->customer->addresses as $address)
                                        <div class="row">
                                            <div class="address">
                                                <input type="radio" name="address_id" value="{{$address->id}}" checked>

                                                <tr>{{$address->street1}}<br>
                                                    {{$address->street2}}<br>
                                                    {{$address->postcode}} {{$address->city}}<br>
                                                    {{$address->country}}
                                                </tr>
                                                <tr>
                                                    {{-- <a type="button" value="Supprimer" ><i class="far fa-trash-alt"></i></a> --}}
                                                </tr>
                                            </div>
                                        </div>
                                    @endforeach
                                </table>
                            @endif
                        @endif
                        <input type="submit" class="btn btn-primary" value="modifier adresse">
                    </form>
                </div>


                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <table class="table">
                        <tr>
                            <th>Commande n°</th>
                            <th>Date</th>
                            <th>Nombre d'articles</th>
                            <th>Total</th>
                            <th>Vue</th>
                        </tr>
                        @foreach($listOfOrders as $tabOrder)
                            <tr>
                                <td>{{$tabOrder['order']->id}}</td>
                                <td>{{date('d-m-Y', strtotime($tabOrder['order']->date)) }}</td>
                                <td>{{$tabOrder['quantity']}}</td>
                                <td>{{$tabOrder['total']/100}} €</td>
                                <td>
                                    <button type="button" class="btn" data-toggle="modal"
                                            data-target="{{ '#modal' . $tabOrder['order']->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'modal' . $tabOrder['order']->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Commande
                                                        n° {{$tabOrder['order']->id}}</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>En date du {{date('d-m-Y', strtotime($tabOrder['order']->date))}}</p>
                                                    <p>Pour un total de {{$tabOrder['total']/100}}€</p>
                                                    <table class="table">
                                                        @foreach($tabOrder['order']->articles as $product)
                                                            <tr>
                                                                <td>
                                                                    <img src="{{asset("/images/bieres/".$product->photo)}}">
                                                                </td>
                                                                <td>{{$product->name}}
                                                                    <br>prix: {{$product->price /100}}€ <br>
                                                                    Quantité: {{$product->pivot->qty}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection