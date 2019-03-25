@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container">
        <div>
            <h3>Ajouter une adresse</h3>
            <form action="{{ route('addressStore') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="street1">Adresse</label>
                    <input type="text" class="form-control" id="street1" aria-describedby="emailHelp" name="street1">
                </div>
                <div class="form-group">
                    <label for="street2">Complément</label>
                    <input type="text" class="form-control" id="street2" aria-describedby="emailHelp" name="street2">
                </div>
                <div class="form-group">
                    <label for="postcode">Code postal</label>
                    <input type="number" class="form-control" id="postcode" aria-describedby="emailHelp" name="postcode">
                </div>
                <div class="form-group">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" aria-describedby="emailHelp" name="city">
                </div>
                <div class="form-group">
                    <label for="country">Pays</label>
                    <input type="text" class="form-control" id="city" aria-describedby="emailHelp" name="country">
                </div>
                <input type="submit" class="btn-ico btn-ico-blue">
            </form>
        </div>

    </div>
@endsection