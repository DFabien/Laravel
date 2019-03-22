<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class ProductController extends Controller
{
    public function showAll()
    {
        //$produits = Products_Model::where('id_cat', 1)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        $produits = Article::all();
        return view('products/product',['liste'=>$produits]);
    }


    public function show($id){
        $details= Article::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.


        return view('products/description', ['produit'=>$details]);
    }
}
