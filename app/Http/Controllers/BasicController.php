<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(){
        return view('basic.home');
    }

    public function contact(){
        return view('basic.contact');
    }

    public function delivery(){
        return view('basic.delivery');
    }

    public function test(){
       // $categorys=Category::all(); // retourner toutes les categories
        $cross=Category:: where('category','Crossfit') ->get(); //"le get c est un peu la touche entrée pour valider la requette sql"
        dump($cross); //par defaut le resultat d'une requete est un tableau
        //dd($cross);
       return view('lesCategories',['a'=>'toto', 'categories' => $cross]);
    }
}
