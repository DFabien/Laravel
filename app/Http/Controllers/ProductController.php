<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class ProductController extends Controller
{
    public function showAll(Request $request)
    {
        if($request->has('sort')){
            $produits = Article::all()->sortBy('price');
            $selected = "price";
        } else {
            $produits = Article::all()->sortBy('name');
            $selected = "name";
        }

        return view('products/product',['liste'=>$produits, 'selected' => $selected]);
    }


    public function show($id){
        $details= Article::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.
        return view('products/description', ['produit'=>$details]);
    }
}
