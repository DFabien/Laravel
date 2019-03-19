<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminProductsController extends Controller
{

    public function showProdsAll(){
        $produits = Article::all();

        return view('Admin/listProducts',['liste'=>$produits]); //listProducts = nom de la vue
    }

    public function showProd($id){
        return view('Admin.showProduct');
    }

    public function addProd(){
        return view('Admin.addProduct');
    }

    public function addProd2(request $request){
        $ajout = new Article;
        $ajout -> name = $request -> name;
        $ajout -> description = $request -> description;
        $ajout -> photo = $request -> photo;
        $ajout -> price = $request -> prix;
        $ajout -> weight = $request -> poids;
        $ajout -> stock = $request -> stock;
        $ajout -> id_cat = $request -> categorie;  //id_cat nom de la bdd, categorie nom du name formulaire
        $ajout -> save(); //pour sauvegarder les ajouts
        return redirect('admin/produits'); //retourne sur l'url
    }

    public function updateProduct(request $request, $id){
        $article = Article::find($id);

        return view('Admin/updateProduct', ['modifier'=>$article]);
    }

    public function updateProduct2(request $request, $id){
        $modif = Article::find($id);
        $modif -> name = $request -> name;
        $modif -> description = $request -> description;
        $modif -> photo = $request -> photo;
        $modif -> price = $request -> prix;
        $modif -> weight = $request -> poids;
        $modif -> stock = $request -> stock;
        $modif -> id_cat = $request -> categorie;
        $modif -> save();
        return redirect('admin/produits');
    }

    public function deleteProd($id){
        $supprimer=Article::find($id);
        $supprimer->delete();
        return redirect('admin/produits');
    }

}
