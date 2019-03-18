@extends('layouts.layout')

@section('content')
    <h1>vciujerzj</h1>
    @foreach($categories as $cat)
    {{$cat->category}}<br>
    @endforeach

    <h1>{{$a}}</h1>

@endsection
