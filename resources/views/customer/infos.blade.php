@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Mes informations</h3>
                @if(Auth::User()->customer)
                    <p>Nom : {{ Auth::User()->customer->name }}</p>
                    <p>Prénom : {{ Auth::User()->customer->first_name }}</p>
                    <a href="{{ route('infosUpdate') }}" class="btn-ico btn-ico-blue">Modifier mes informations</a>
                @else
                    <a href="{{ route('infosAdd') }}" class="btn-ico btn-ico-green">Ajouter des informations</a>
                @endif
            </div>
            <div class="col">
                <h3>Mes adresses</h3>
                @if(Auth::User()->customer)
                    @if(count(Auth::User()->customer->addresses) != 0)
                        <form action="{{ route('basketSave') }}" method="POST" id="saveForm">
                            @csrf
                        </form>
                        <a href="{{ route('addressAdd') }}" class="btn-ico btn-ico-green">Ajouter une adresse</a>
                        @foreach(Auth::User()->customer->addresses as $address)
                            <div class="row">
                                <div class="col">
                                    <input type="radio" name="address_id" value="{{ $address->id }}" checked form="saveForm">
                                </div>
                                <div class="col">
                                    <p>{{ $address->street1 }} {{ $address->street2 }}<br/>
                                        {{ $address->postcode }} {{ $address->city }}<br/>
                                        {{ $address->country }}</p>
                                </div>
                                <div class="col">
                                    <a href="{{ route('addressUpdate' , ['id' => $address->id]) }}" class="btn-ico btn-ico-blue">modifier</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <a href="{{ route('addressAdd') }}" class="btn-ico btn-ico-green">Ajouter une adresse</a>
                    @endif
                @else
                    <p>Complétez vos informations afin de pouvoir gérer vos adresses</p>
                @endif
            </div>
        </div>
        <div>
            @if(!Auth::User()->customer || (count(Auth::User()->customer->addresses) == 0))
                <p>Validez vos informations avant de pouvoir finaliser la commande</p>
            @else
                <input type="submit" value="Valider la commande" class="btn-ico btn-ico-green" form="saveForm">
            @endif
        </div>

    </div>
@endsection