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
        $product = new Product();
        return view('Admin.addUpdateProduct', ['product' => $product]);
    }

    public function updateProd($id){
        $product = Product::find($id);

        return view('Admin.addUpdateProduct', ['product' => $product]);
    }

    public function deleteProd($id){
        $product = Product::find($id);

        return view('Admin.deleteProduct', ['product' => $product]);
    }
    public function destroyProd($id){
        $product = Product::find($id);
        $product->delete();

        return redirect(route('adminProducts'));
    }

    public function storeProd(Request $request){

        Product::updateOrCreate( ['id' => $request->id], $request->all());

        return redirect(route('adminProducts'));
    }

}
