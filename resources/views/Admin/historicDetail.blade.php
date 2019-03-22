@extends('layouts/admin/layout')

@section('title')
histDet
@endsection


@section('content')
<h1> Order n°{{$order->id}} dated {{date('d-m-Y G:i:s', strtotime($order->date))}} </h1>
<h3> Customer: {{$order->customer->name}} - {{$order->customer->first_name}}  </h3>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="center">Product</th>
            <th scope="col" class="center">Quantity</th>
            <th scope="col" class="center">Amount</th>
        </tr>
    </thead>
    <tbody>
        @php($total = 0)
        @php($qty =0)
        @foreach($order->articles as $article)
        @php($total += ($article->price/100) * ($article->pivot->qty))
        @php($qty = ($article->pivot->qty))
        <tr>
            <td class="center">{{$article->name}}</td>
            <td class="center">{{$qty}}</td>
            <td class="center">{{$total}} €</td>
        </tr>
    </tbody>
    @endforeach
</table>

<p>
    <a type="button" href="{{route('adminOrders')}}"><i class="fas fa-undo"></i>
        Back to orders history</a>
</p>

@endsection