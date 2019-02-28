<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showCatAll(){
        return view('/admin/categories');
    }

    public function addCat(){
        return view('/admin/categories/add');
    }

    public function updateCat($id){
        return view('/admin/categories/edit/{id}');
    }

    public function deleteCat($id){
        return view('/admin/categories');
    }


    public function showProdsAll(){
        return view('/admin/produits');
    }

    public function showProd(){
        return view('/admin/produit/{id}');
    }

    public function addProd(){
        return view('/admin/produit/add');
    }

    public function updateProd(){
        return view('/admin/produit/edit/{id}');
    }

    public function delteProd(){
        return view('/admin/produits');
    }

    public function showDiscAll(){
        return view('/admin/discount');
    }

    public function addDiscount(){
        return view('/admin/discount/add');
    }

    public function updateDiscount(){
        return view('/admin/discount/edit');
    }

    public function deleteDiscount(){
        return view('/admin/discount');
    }

    public function showDelivAll(){
        return view('/admin/delivery');
    }

    public function historicOrder(){
        return view('/admin/historique/commande');
    }

    public function detailOrder($id){
        return view('/admin/historique/detail/{id}');
    }

    public function showUsersAll(){
        return view('/admin/users');
    }

    public function orderUser($id){
        return view('/admin/users/order/{id}');
    }

    public function orderDuser (){
        return view('/admin/users/detail/order/{id}');
    }

}
