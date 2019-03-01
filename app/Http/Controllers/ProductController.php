<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $blonde = array(
            'name' => 'Grimbergen Blonde',
            'price' => 5.25,
            'photo' => 'images/blonde_verre.png'
        );

        $blanche = array (
            'name' => 'Grimbergen Blanche',
            'price' => 5.49,
            'photo' => 'images/blanche_verre.png'
        );
        
        $ambree = array (
            'name' => 'Grimbergen Ambrée',
            'price' => 6.17,
            'photo' => 'images/ambree_verre.png'
        );

        $rouge = array (
            'name' => 'Grimbergen Rouge',
            'price' => 5.69,
            'photo' => 'images/rouge_verre.png'
        );

        $products=[$blonde,$blanche,$ambree, $rouge];
        
        return view('products/product', ['liste'=>$products]);
    }
    public function show($id){

        return view('products/description');
    }
}
