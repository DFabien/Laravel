@extends('../layouts/layout')

@section('title')
PANIER
@endsection

@section('content')
<div class="container">
    <h1 class="mb-40">Mon panier</h1>
    @if(!empty($articles))
    <table class="table basketList mb-40">
        <tr>
            <th></th>
            <th>Nom</th>
            <th class="center">Prix/U</th>
            <th class="center">Quantité</th>
            <th class="center">Total</th>
            <th></th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td><a href="{{route('product', ['id' =>$article['product']->id ])}}"><img src="{{ $article['product']->image }}" alt="{{  $article['product']->name }}"></a></td>
                <td><a href="{{route('product', ['id' =>$article['product']->id ])}}" class="basketLink">{{ $article['product']->name }}</a></td>
                <td class="center">{{ $article['product']->price /100 }} €</td>
                <td class="center">{{ $article['quantity'] }}</td>
                <td class="center">{{ ($article['product']->price /100) * $article['quantity'] }} €</td>
                <td class="center"><a href="{{route('basketDelete', ['id' =>$article['product']->id ])}}" class="ico-button ico-button-red"><i class="fas fa-trash"></i></a></td>
            </tr>
        @endforeach
        <tr>

            <td></td>
            <td></td>
            <td></td>
            <th class="center">Total</th>
            <th class="center">{{ $total }} €</th>
            <td></td>
        </tr>
    </table>
    <p class="right"><a href="{{ route('basketValidation') }}" class="ico-button ico-button-green">valider la commande</a></p>
    @else
        <h2>Panier vide</h2>
    @endif
</div>
@endsection