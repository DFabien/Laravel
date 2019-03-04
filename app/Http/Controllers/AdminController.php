<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDelivAll(){
        return view('Admin.delivery');
    }

    public function historicOrder(){
        return view('Admin.historicOrder');
    }

    public function detailOrder($id){
        return view('Admin.historicDetail');
    }

    public function showUsersAll(){
        return view('Admin.users');
    }

    public function orderUser($id){
        return view('Admin.orderUser');
    }

    public function orderDetailUser ($id){
        return view('Admin.orderDetailUser');
    }

}
