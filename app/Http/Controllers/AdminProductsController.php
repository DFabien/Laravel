<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Discount;

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
        $categories= Category::all();
        $discount= Discount::All();
        
        return view('Admin.addProduct', ['categorie'=>$categories, 'discounts'=>$discount]);
    }
    
    public function addProd2(Request $request){
        $request->validate([
            'name' => 'required|unique:articles',
            'description' => 'required',
            'photo' => 'image|nullable',
            'prix' => 'required|numeric|min:0',
            'poids' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'categorie' => 'required',
            'discount' => 'nullable']);
            $ajout = new Article;
            $ajout -> name = $request -> name;
            $ajout -> description = $request -> description;
            $ajout -> photo = $request -> photo;
            $ajout -> price = $request -> prix;
            $ajout -> weight = $request -> poids;
            $ajout -> stock = $request -> stock;
            $ajout -> category_id = $request -> categorie;  //id_cat nom de la bdd, categorie nom du name formulaire
            $ajout -> discount_id = $request -> discount;
            $ajout -> save(); //pour sauvegarder les ajouts
            return redirect('admin/produits'); //retourne sur l'url
        }
        
        public function updateProduct(Request $request, $id){
            $article = Article::find($id);
            $category= Category::All();
            $discount= Discount::All();
            return view('Admin/updateProduct', ['articles'=>$article, 'categories'=>$category, 'discounts'=>$discount]);
        }
        
        public function updateProduct2(Request $request, $id){
            $request->validate([
                'name' => 'required|unique:articles',
                'description' => 'required',
                'photo' => 'image|nullable',
                'prix' => 'required|numeric|min:0',
                'poids' => 'required|numeric|min:0',
                'stock' => 'required|numeric|min:0',
                'categorie' => 'required',
                'discount' => 'nullable']);
                $modif = Article::find($id);
                $modif -> name = $request -> name;
                $modif -> description = $request -> description;
                $modif -> photo = $request -> photo;
                $modif -> price = $request -> prix;
                $modif -> weight = $request -> poids;
                $modif -> stock = $request -> stock;
                $modif -> category_id = $request -> categorie;
                $modif -> save();
                return redirect('admin/produits');
            }
            
            public function deleteProd($id){
                $supprimer=Article::find($id);
                $supprimer->delete();
                return redirect('admin/produits');
            }
            
        }
