<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;

class BasketController extends Controller
{
    public function show(Request $request){

        $produits = $request->session()->get('basket', []);
        $total=0;

        foreach ($produits as $produit){
            $total+=($produit['produit']->price/100) * ($produit['quantity']);

        }
        return view('basket/basket', ['produits'=>$produits,'total'=>$total]);
    }


    public function update(Request $request, $id){

        $panier= Article::find($id);
        $request->session()->put('basket.'.$id, ['produit'=>$panier,'quantity'=>$request->input('quantity')] );

        return redirect(route('basket'));
    }


    public function delete(Request $request,$id){


        $request->session()->forget('basket.'.$id);

        return redirect(route('basket'));
    }



    public function erase(Request $request){

        //vider/supprimer le panier en entier

        $request->session()->forget('basket');

        return redirect(route('products'));
    }



    public function discount($codePromo){
        return view('basket.basket');
    }



    public function add(Request $request , $id){


        $panier= Article::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.
        $request->session()->put('basket.'.$id, ['produit'=>$panier,'quantity'=>$request->input('quantity')] );



        return redirect(route('basket'));
    }

    public function save(Request $request){   //fonction qui permet d'enregistrer la commande en bdd

        $articles = $request->session()->get('basket', []);

        $order = new Order();
        $order->customer_id = 1;
        $order->address_id = 1;
        $order->save();

        foreach ($articles as $article){

            $articleId = $article['produit']->id;
            $quantity = $article['quantity'];

            $order->articles()->attach($articleId, ['qty' => $quantity]);
        }

        $request->session()->forget('basket');

        return redirect(route('products'));
    }

}
