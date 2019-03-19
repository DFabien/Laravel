<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_Model;

class BasketController extends Controller
{
    public function show(Request $request){

        $produits = $request->session()->get('basket', []);

        return view('basket/basket', ['produits'=>$produits]);
    }

    public function update(){
        return view('basket.basket');
    }

    public function delete($id){
        return view('basket.basket');
    }

    public function discount($codePromo){
        return view('basket.basket');
    }

    public function add(Request $request , $id){

        $panier= Products_Model::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.
        $request->session()->put('basket.'.$id, $panier );

        return redirect(route('basket'));
    }

}
