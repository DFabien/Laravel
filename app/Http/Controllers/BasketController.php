<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_Model;

class BasketController extends Controller
{
    public function show(){
        
        return view('basket/basket');
    }

    public function update(){
        return view('basket/basket');
    }

    public function delete($id){
        return view('basket/basket');
    }

    public function discount($codePromo){
        return view('basket/basket');
    }

    public function add($id){
        $panier= Products_Model::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.

        return view('basket/basket', ['produit'=>$panier]);
    }

}
