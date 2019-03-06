<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class ProductController extends Controller
{
    public function showAll()
    {
        $produit = Products::orderBy('price')->get();
        //dd($produit);
        return view ('products/product',['liste'=>$produit]);
    }


    public function show($id){
        //$produit=DB::select('select * from products where id_products = :id', ['id' => $id] );

       $produit=Products::find($id);

        // $produit=DB::select('select * from products where id_products =1' );
//dd($produit[0]);
        return view('products.description',['produit'=>$produit]);
    }
}
