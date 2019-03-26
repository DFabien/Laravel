@extends('../layouts/layout')

@section('title')
    Mon compte
@endsection

@section('content')
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Compte</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Adresses</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Commandes</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                @if(Auth::User()->customer)
                    <p>Nom : {{ Auth::User()->customer->name }}</p>
                    <p>Prénom : {{ Auth::User()->customer->first_name }}</p>
                    <a href="{{ route('infosUpdate') }}" class="btn-ico btn-ico-blue">Modifier mes informations</a>
                @else
                    <a href="{{ route('infosAdd') }}" class="btn-ico btn-ico-green">Ajouter des informations</a>
                @endif
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                @if(Auth::User()->customer)
                    @if(count(Auth::User()->customer->addresses) != 0)
                        <a href="{{ route('addressAdd') }}" class="btn-ico btn-ico-green">Ajouter une adresse</a>
                        <table class="table">
                        @foreach(Auth::User()->customer->addresses as $address)
                                <tr>
                                   <td>{{ $address->street1 }} {{ $address->street2 }}</td>
                                    <td>{{ $address->postcode }} {{ $address->city }}</td>
                                    <td>{{ $address->country }}</td>
                                    <td> <a href="{{ route('addressUpdate', ['id' => $address->id]) }}" class="btn-ico btn-ico-blue"><i class="fas fa-edit"></i></a></td>
                                </tr>
                        @endforeach
                        </table>
                    @else
                        <a href="{{ route('addressAdd') }}" class="btn-ico btn-ico-green">Ajouter une adresse</a>
                    @endif
                @else
                    <p>Complétez vos informations afin de pouvoir gérer vos adresses</p>
                @endif
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <table class="table">
                    <tr>
                        <th>Date</th>
                        <th>Nombre d'articles</th>
                        <th>Total</th>
                        <th>Vue</th>
                    </tr>
                    @foreach(Auth::user()->customer->orders as $order)
                        @php( $total = 0 )
                        @php( $nbarticle = 0 )
                        @foreach($order->articles as $article)
                            @php($total += $article->price * $article->pivot->qty)
                            @php($nbarticle += $article->pivot->qty)
                        @endforeach
                        <tr>
                            <td>{{  date('d-m-Y', strtotime($order->date)) }}</td>
                            <td>{{ $nbarticle }}</td>
                            <td>{{ $total/100 }} €</td>
                            <td>
                                <button type="button" class="btn-ico btn-ico-blue" data-toggle="modal" data-target="{{ '#modal' . $order->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="{{ 'modal' . $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog container" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Commande n° {{ $order->id }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{  date('d-m-Y', strtotime($order->date)) }}</p>
                                                <table class="table">
                                                    @foreach($order->articles as $product)
                                                        <tr>
                                                            <td><img src="{{ asset("/images/bieres/".$product->photo) }}" class="height-50"> </td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->price /100 }} €</td>
                                                            <td>{{ $product->pivot->qty }}</td>
                                                            <td>{{ ($product->price * $product->pivot->qty)/100 }} €</td>
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
@endsection