<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products_Model;

class ProductController extends Controller
{
    public function showAll()
    {
        $produits = Products_Model::where('id_cat', 1)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        
        return view('products/product',['liste'=>$produits]);
    }

    public function showAll1()
    {
        $produits = Products_Model::where('id_cat', 2)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        
        return view('products/product',['liste'=>$produits]);
    }

    public function showAll2()
    {
        $produits = Products_Model::where('id_cat', 3)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        
        return view('products/product',['liste'=>$produits]);
    }

    public function showAll3()
    {
        $produits = Products_Model::where('id_cat', 4)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        
        return view('products/product',['liste'=>$produits]);
    }

    public function showAll4()
    {
        $produits = Products_Model::where('id_cat', 5)->get(); //fonction qui permet de selectionner la catégorie 1 dans mon tableau qui correspond à mon model
        
        return view('products/product',['liste'=>$produits]);
    }

    public function show($id){
        $details= Products_Model::find($id);   //fonction qui permet d'afficher uniquement l'article voulu.

        return view('products/description', ['produit'=>$details]);
    }
}
