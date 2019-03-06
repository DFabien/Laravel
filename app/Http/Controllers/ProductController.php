<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAll()
    {
        $produits = DB::select('select * from products');
            return view('products.product',['products' =>$produits]);
    }
    public function show($id){

        return view('products.description');
    }
}
