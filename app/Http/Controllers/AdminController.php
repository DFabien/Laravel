<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_Model;

class AdminController extends Controller
{
    public function showCatAll(){
        return view('Admin/category');
    }

    public function addCat(){
        return view('Admin/addCategory');
    }

    public function updateCat($id){
        return view('Admin/updateCategory');
    }

    public function deleteCat($id){
        return view('Admin/category');
    }


    public function showProdsAll(){
        $produits = Products_Model::all();

        return view('Admin/listProducts',['liste'=>$produits]); //listProducts = nom de la vue
    }

    public function showProd($id){
        return view('Admin/showProduct');
    }

    public function addProd(){
        return view('Admin/addProduct');
    }

    public function addProd2(request $request){
        $ajout = new Products_Model;
        $ajout -> name = $request -> name;
        $ajout -> description = $request -> description;
        $ajout -> photo = $request -> photo;
        $ajout -> price = $request -> prix;
        $ajout -> weight = $request -> poids;
        $ajout -> stock = $request -> stock;
        $ajout -> id_cat = $request -> categorie;  //id_cat nom de la bdd, categorie nom du name formulaire
        $ajout -> save(); //pour sauvegarder les ajouts
        return redirect('admin/produits'); //retourne sur l'url
    }

    public function updateProduct(request $request, $id){
        $article = Products_Model::find($id);

        return view('Admin/updateProduct', ['modifier'=>$article]);
    }

    public function updateProduct2(request $request, $id){
        $modif = Products_Model::find($id);
        $modif -> name = $request -> name;
        $modif -> description = $request -> description;
        $modif -> photo = $request -> photo;
        $modif -> price = $request -> prix;
        $modif -> weight = $request -> poids;
        $modif -> stock = $request -> stock;
        $modif -> id_cat = $request -> categorie;
        $modif -> save();
        return redirect('admin/produits');
    }

    public function deleteProd(){
        return view('Admin/showProduct');
    }

    public function showDiscAll(){
        return view('Admin/discount');
    }

    public function addDiscount(){
        return view('Admin/addDiscount');
    }

    public function updateDiscount(){
        return view('Admin/updateDiscount');
    }

    public function deleteDiscount($id){
        return view('Admin/discount');
    }

    public function showDelivAll(){
        return view('Admin/delivery');
    }

    public function historicOrder(){
        return view('Admin/historicOrder');
    }

    public function detailOrder($id){
        return view('Admin/historicDetail');
    }

    public function showUsersAll(){
        return view('Admin/users');
    }

    public function orderUser($id){
        return view('Admin/orderUser');
    }

    public function orderDetailUser ($id){
        return view('Admin/orderDetailUser');
    }

}
