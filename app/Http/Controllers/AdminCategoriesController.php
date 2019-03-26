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

        return redirect(route('adminCategories'));
    }

    public function addCat(){

        return view('Admin/addCategory');
    }

    public function updateCat( $id){

        //recuperer le champ category (nom) de la table category
        // grace au model
        $cat =Category::find($id);

        //$name = $request->input('nom');

       // $cat = Category::find($id);
//        $cat->category = $name;
//        $cat->save();



        return view('Admin.updateCategory',['cat'=>$cat]);
    }

    public function majCat(Request $request, $id){

        $name = $request->input('nomcat');

        $cat =Category::find($id);
        $cat->category = $name;
        $cat->save();

        return redirect(route('adminCategories'));







    }


    public function deleteCat($id){
        return view('Admin.category');
    }

}
