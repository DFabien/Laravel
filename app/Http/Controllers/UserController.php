<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function profil(){
        return view('User.view');
    }

    public function updateAccount(){
        return view('User.view');
    }

    public function deleteAccount($id){
        return view('basic.home');
    }

    public function showOrdersAll(){
        return view('User.orders');
    }

    public function showOrder($id){
        return view('User.orderDetail');
    }
}
