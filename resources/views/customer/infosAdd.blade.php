@extends('../layouts/layout')

@section('title')
    PANIER
@endsection

@section('content')
    <div class="container">
        <div>
            <h3>Ajouter des informations</h3>
            <form action="{{ route('infosStore') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                </div>
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" name="first_name">
                </div>
                <input type="submit" class="btn-ico btn-ico-blue">
            </form>
        </div>

    </div>
@endsection