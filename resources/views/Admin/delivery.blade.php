@extends('layouts/admin/layout')

@section('title')
    Livraison

@endsection

@section('content')
    <div class="container">
        @foreach($deliveries as $key => $deliveryGroup)
            <div class="delivery">
                <h2>{{ $key }}</h2>
                @foreach($deliveryGroup as $delivery)
                    <div>
                        <h3>{{ $delivery['name'] }}</h3>
                        <p>{{ $delivery['delay'] }}</p>
                        <p>{{ $delivery['content'] }}</p>
                        <p>{{ $delivery['price'] }} €</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>


@endsection