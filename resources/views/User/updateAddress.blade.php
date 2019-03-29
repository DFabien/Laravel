@extends ('layouts.layout')
@section('title')
Modifier mon compte
@endsection

@section('content')

<div class="container">
    <h1 class="titre-principal"> Modifier mon adresse </h1>
    <form action={{route('updateSave')}} method="get">
        @method('GET')
        @csrf
        <input type="hidden" value="{{$address->id}}" name="address_id">
        <div class="form-group">
            <label for="desc">Adresse</label><br>
            <input id="decription" type="text" name="street1" class="form-control"
            value="{{$address->street1}}" required>
        </div>
        
        <div class="form-group">
            <label for="name">Complément</label><br>
            <input type="text" id="name" name="street2" class="form-control" value="{{$address->street2}}">
        </div>
        
        <div class="form-group">
            <label for="image">Code Postal</label><br>
            <input id="photo" type="text" name="postcode" class="form-control" value="{{$address->postcode}}">
        </div>
        
        <div class="form-group">
            <label for="px">Ville</label><br>
            <input id="prix" type="text" name="city" class="form-control" value="{{$address->city}}"
            required>
        </div>
        
        <div class="form-group">
            <label for="poids">Pays</label><br>
            <input id="weight" type="text" name="country" class="form-control" value="{{$address->country}}"
            required>
        </div>
        
        <div class="form-group">
            <input type="submit" name="ajout" value="Save" class="btn">
        </div>
    </form>
</div>

@endsection
