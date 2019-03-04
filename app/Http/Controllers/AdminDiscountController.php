<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{

    public function showDiscAll(){
        return view('Admin.discount');
    }

    public function addDiscount(){
        return view('Admin.addDiscount');
    }

    public function updateDiscount(){
        return view('Admin.updateDiscount');
    }

    public function deleteDiscount($id){
        return view('Admin.discount');
    }


}
