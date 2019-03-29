@extends ('layouts.layout')
@section('title')
    ma commande
@endsection

@section('content')
<p>{{ $order->id }}</p>
    @foreach($order->articles as $article)
        <p>{{ $article->name }}</p>
    @endforeach
@endsection