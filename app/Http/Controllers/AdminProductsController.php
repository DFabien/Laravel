<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

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
        $categories = Category::All();
        return view('Admin.addUpdateProduct', ['product' => $product, 'categories' => $categories]);
    }

    public function updateProd($id){
        $product = Product::find($id);
        $categories = Category::All();
        return view('Admin.addUpdateProduct', ['product' => $product, 'categories' => $categories]);
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
