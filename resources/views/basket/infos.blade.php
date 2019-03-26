@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container">
        <h3>Choisir une adresse</h3>
        <div>
            @if(!Auth::User()->customer || (count(Auth::User()->customer->addresses) == 0))
                <a href="{{ route('infos') }}" class="btn-ico btn-ico-blue">Ajouter une adresse</a>
            @else
                <a href="{{ route('infos') }}" class="btn-ico btn-ico-blue">Gérer mes adresses</a>
                <form action="{{ route('basketSave') }}" method="POST" id="saveForm">
                    @csrf
                    <table class="table">
                    @foreach(Auth::user()->customer->addresses as $address)
                        <tr>
                            <td><input type="radio" name="address_id" value="{{ $address->id }}" checked form="saveForm"></td>
                            <td>{{ $address->street1 }} {{ $address->street2 }}</td>
                            <td>{{ $address->postcode }} {{ $address->city }}</td>
                            <td>{{ $address->country }}</td>
                        </tr>
                    @endforeach
                    </table>
                </form>
                <input type="submit" value="Valider la commande" class="btn-ico btn-ico-green" form="saveForm">
            @endif
        </div>

    </div>
@endsection