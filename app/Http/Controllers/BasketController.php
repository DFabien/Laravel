<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(){
        return view('basket.basket');
    }

    public function update(){
        return view('basket.basket');
    }

    public function delete($id){
        return view('basket.basket');
    }

    public function discount($codePromo){
        return view('basket.basket');
    }

    public function add($id){
        return view('products.description');
    }

}
