@extends('layouts/layout')

@section('title')
    Nos Categories de Bières

@endsection

@section('content')
    @foreach ($categories as $category)
        {{ $category->category}} <br>
    @endforeach
@endsection