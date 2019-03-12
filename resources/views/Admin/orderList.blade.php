@extends('layouts/admin/layout')

@section('title')
    Liste commandes
@endsection

@section('content')
    <div class="container">
        <h1>Commandes</h1>

        <table class="table mt-40">
            @foreach($orders as $order)
                @php $total = 0 @endphp

                @foreach($order->product as $product)
                    @php
                        $total += ($product->price/100)*$product->pivot->quantity;
                    @endphp
                @endforeach
                <tr>
                    <td>{{ date('d-m-Y', strtotime($order->order_date)) }}</td>
                    <td>{{ ucfirst($order->user->firstname) }} {{ ucfirst($order->user->lastname) }}</td>
                    <td class="center">{{ $total }} €</td>
                    <td class="center"><a href="" class="ico-button ico-button-blue"><i class="fas fa-eye"></i></a> </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection