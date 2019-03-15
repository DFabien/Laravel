<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class AdminController extends Controller
{
//    public function showCatAll(){
//        return view('Admin.category');
//    }
//
//    public function addCat(){
//        return view('Admin/addCategory');
//    }
//
//    public function updateCat($id){
//        return view('Admin/updateCategory');
//    }
//
//    public function deleteCat($id){
//        return view('Admin/category');
//    }


    public function showProdsAll(){
        $produit=Products::all();
        return view('Admin/listProducts',['liste'=>$produit]);
    }

    public function showProd($id){
        return view('Admin/showProduct');
    }

    public function addProd(request $request){
//
        return view('Admin/addProduct');
    }

    public function updateProd($id){

        $article = Products::find($id);

        return view('Admin.updateProduct', [ 'article' => $article ] );
    }

    public function edit_store(request $request, $id){

        $article = Products::find($id);
        $article ->name= $request->nom;
        $article ->description= $request->description;
        $article ->price= $request->prix;
        $article ->weight= $request->weight;
        $article ->stock_quantity= $request->stock_quantity;
        $article ->category= $request->category;
        $article -> save();

        return redirect('admin/produits');

    }

    public function deleteProd($id){

        $article= Products::find($id);
        $article->delete();

        return redirect('admin/produits');

    }

    public function store(request $request){

        $article = new Products;
        $article ->name= $request->nom;
        $article ->description= $request->description;
        $article ->price= $request->prix;
        $article ->weight= $request->weight;
        $article ->stock_quantity= $request->stock_quantity;
        $article ->category= $request->category;
        $article -> save();

        return redirect('admin/produits') ;
    }

//    public function showDiscAll(){
//        return view('Admin/discount');
//    }
//
//    public function addDiscount(){
//        return view('Admin/addDiscount');
//    }
//
//    public function updateDiscount(){
//        return view('Admin/updateDiscount');
//    }
//
//    public function deleteDiscount($id){
//        return view('Admin/discount');
//    }
//
//    public function showDelivAll(){
//        return view('Admin/delivery');
//    }
//
//    public function historicOrder(){
//        return view('Admin/historicOrder');
//    }
//
//    public function detailOrder($id){
//        return view('Admin/historicDetail');
//    }
//
//    public function showUsersAll(){
//        return view('Admin/users');
//    }
//
//    public function orderUser($id){
//        return view('Admin/orderUser');
//    }
//
//    public function orderDetailUser ($id){
//        return view('Admin/orderDetailUser');
//    }
//
}
