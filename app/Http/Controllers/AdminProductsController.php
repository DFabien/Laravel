<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductsController extends Controller
{

    public function showProdsAll(){
        return view('Admin.listProducts');
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

}
