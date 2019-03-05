<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAll()
    {
        $produits = DB::select('select*from article WHERE id_cat=1');
        
        return view('products/product',['liste'=>$produits]);
    }

    public function show($id){
        $details=DB::select('select*from article WHERE id_article=?', [$id]);

        return view('products/description', ['produit'=>$details]);
    }
}
