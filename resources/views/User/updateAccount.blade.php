@extends ('layouts.layout')
@section('title')
Modifier mon compte
@endsection

@section('content')
<div class="container">
        <h1 class="titre-principal"> Modify a product </h1>
        <form action={{route('modification', ['modif'=>$user->id])}} method="post">
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
                <input type="text" id="name" name="name" class="form-control" value="{{Auth::User()->customer->name }}" required>
            </div>
            <div class="form-group">
                <label for="desc">Prénom</label><br>
                <input id="prenom" type="text" name="first_name" class="form-control"
                    value="{{Auth::User()->customer->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="image">Email</label><br>
                <input id="email" type="text" name="email" class="form-control" value="{{Auth::User()->email }}">
            </div>

            <div class="form-group">
                <input type="submit" name="ajout" value="Save" class="btn">
            </div>
        </form>
    </div>
    </div>


@endsection