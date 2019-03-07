<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAll()
    {
        $produits = DB::select('select * from products');
       // dd($produits); // dump and die afficher ce que contient la variable en parametre et arrete l'execution du code
            return view('products.product',['products' =>$produits]);
    }
    public function show($id){
        $produits = DB::select("select nom,description,price from products WHERE id_products = $id");
        // double cote accepte variables php mais pas simple cote

        return view('products.description',['products' =>$produits[0]]);
    }
}
