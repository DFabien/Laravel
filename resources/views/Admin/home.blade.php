@extends('layouts/admin/layout')

@section('title')
    Administration
@endsection

@section('content')
    <div class="container adminHome">
        @foreach($orders as $order)

        @endforeach
        <div class="row">
            <div class="col">
                <h2>Dernières commandes</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col" class="center">Montant</th>
                        <th scope="col" class="center">Détail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        @php($total = 0)
                        @foreach($order->articles as $article)
                            @php($total += ($article->price/100) * ($article->pivot->qty))
                        @endforeach
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($order->date)) }}</td>
                            <td class="center">{{ $total }} €</td>
                            <td class="center">lien</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h2>Stocks</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col"  class="center">Quantité</th>
                        <th scope="col"  class="center">Détail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->name }}</td>
                            <td class="center">{{ $article->stock }}</td>
                            <td class="center"><a class="btn-ico btn-ico-blue" href="{{ route('adminEdit', ['id' => $article->id ]) }}"><i class="fas fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
@endsection