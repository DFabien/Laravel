<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TheProducts;

class ProductController extends Controller
{
    public function showAll()
    {
        $articles = DB::select('select * from articles');
            return view('products.product',['articles' =>$articles]);
    }
    public function show($id){
        $articles = DB::select("select name,description,price from articles WHERE id = $id");
        // double cote accepte variables php mais pas simple cote

        return view('products.description',['articles' =>$articles[0]]);
    }
}

/*class ProductController extends Controller
{
    public function showAll()
    {
        $produits = DB::select('select * from articles');
        // dd($produits); // dump and die afficher ce que contient la variable en parametre et arrete l'execution du code
        return view('products.product',['products' =>$produits]);
    }
    public function show($id){
        $produits = DB::select("select nom,description,price from products WHERE id_products = $id");
        // double cote accepte variables php mais pas simple cote

        return view('products.description',['products' =>$produits[0]]);
    }
}*/
