<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function showAll()
    {

        // $products = DB::select('select * from product');

        $products = Product::All();

        return view('products.product', ['liste'=>$products]);
    }
    public function show($id){

       // $product = DB::select('select * from product where id = :id', ['id' => $id]);

        $product = Product::find($id);

        return view('products.description' , ['product' => $product]);
    }
}
