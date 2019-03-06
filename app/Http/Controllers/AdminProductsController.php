<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminProductsController extends Controller
{

    public function showProdsAll(){

        $products = Product::All()->sortBy('name');

        return view('Admin.listProducts', ['products' => $products]);
    }

    public function showProd($id){
        return view('Admin.showProduct');
    }

    public function addProd(){
        return view('Admin.addProduct');
    }

    public function updateProd(){
        return view('Admin.updateProduct');
    }

    public function deleteProd(){
        return view('Admin.showProduct');
    }

    public function storeProd(Request $request){

        Product::create($request->all()); // cree une instance de product et la sauve en base, request->all passe en tableau les données recus

        /*
        $product->name = $request->name;
        $product->descr = $request->descr;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->stock = $request->stock;
        $product->id_category = $request->id_category;

        $product->save();
        */

        return redirect(route('adminProducts'));
    }

}
