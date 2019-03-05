<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAll()
    {
        $produit = DB::select('select*from products');
        //dd($produit);
        return view ('products/product',['liste'=>$produit]);
    }


    public function show($id){
        $produit=DB::select('select * from products where id_products = :id', ['id' => $id] );
        // $produit=DB::select('select * from products where id_products =1' );
//dd($produit[0]);
        return view('products.description',['produit'=>$produit[0]]);
    }
}
