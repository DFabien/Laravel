@extends('layouts/admin/layout')

@section('title')
    upCtg
@endsection

@section('content')
 <h1>Nom de Zeus! Modifier une categorie</h1>
 <form action={{route('adminCategoryMaj', $cat->id) }} method="post">

            @method('PUT')
        @csrf
        {{--<div><label>Nom actuel </label> --><input type ="text" name="oldname" value="{{$category->category}}"></div>--}}
        {{--<div><label>Nouveau nom </label>--><input type="text" name="newname" value="{{$category->category}}"></div>--}}

            <div><label>Nom actuel </label> --><input type ="text" name="nomcat" value="{{$cat->category}}"></div>

        <div><input type="submit"></div>

    </form>

@endsection