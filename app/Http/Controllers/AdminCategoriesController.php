<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    public function showCatAll(){
        return view('Admin/category');
    }

    public function addCat(){
        return view('Admin/addCategory');
    }

    public function updateCat($id){
        return view('Admin.updateCategory');
    }

    public function deleteCat($id){
        return view('Admin.category');
    }

}
