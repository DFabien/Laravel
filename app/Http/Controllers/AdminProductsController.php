<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheProducts;

class AdminProductsController extends Controller
{

    public function showProdsAll(){
        $produits = TheProducts:: all();
        return view('Admin.listProducts',['products' =>$produits]);

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

    public function store(request $request){
        $article=new TheProducts;
        $article->nom=$request->nom;
        $article->category=$request->category;
        $article->stock_quantity=$request->stock_quantity;
        $article->price=$request->price;
        $article->weight=$request->weight;
        $article->description=$request->description;

        $article->save();

        return redirect(route('adminProducts'));
    }

}
