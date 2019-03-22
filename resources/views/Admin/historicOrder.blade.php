@extends('layouts/admin/layout')

@section('title')
histOrd
@endsection

@section('content')

    <h1> Orders history </h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="center">Id</th>
                <th scope="col" class="center">Date</th>
                <th scope="col" class="center">Amount</th>
                <th scope="col" class="center">Quantity</th>
                <th scope="col" class="center">Details<th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                @php($total = 0)
                @php($totalqty =0)
                @foreach($order->articles as $article)
                @php($total += ($article->price/100) * ($article->pivot->qty))
                @php($totalqty += ($article->pivot->qty)) 
                @endforeach
                <tr>
                    <td class="center">{{$order->id}}</td>
                    <td class="center">{{date('d-m-Y', strtotime($order->date))}}</td>
                    <td class="center">{{$total}} €</td>
                    <td class="center">{{$totalqty}}</td>
                    <td class="center"><a type="button" href="{{route('adminOrder', $order->id)}}"><i class="far fa-eye"></i></a></td>
                </tr>
            </tbody>
                @endforeach
    </table>
@endsection