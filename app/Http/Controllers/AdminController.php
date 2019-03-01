<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Admin/listProducts');
    }

    public function showProd($id){
        return view('Admin/showProduct');
    }

    public function addProd(){
        return view('Admin/addProduct');
    }

    public function updateProd(){
        return view('Admin/updateProduct');
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
