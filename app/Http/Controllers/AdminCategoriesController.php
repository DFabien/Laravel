<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class AdminCategoriesController extends Controller
{
    public function showCatAll(){
        $categories=Category::all();

        return view('Admin/category',['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $name = $request->input('nom');

        $cat = new Category;
        $cat->category = $name;
        $cat->save();

        //Category::create(['category'=>$name]);
        $categories=Category::all();
        return view('Admin/category',['categories'=>$categories]);
        //return redirect()-> route('adminCategories');
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
