<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showAll()
    {
        if(isset($_GET['sort'])){
            $products = Product::All()->sortBy('price');
        } else {
            $products = Product::All()->sortBy('name');
        }

        return view('products.product', ['liste' => $products]);
    }

    public function showAllByPrice()
    {

        $products = Product::All()->sortBy('price');

        return view('products.product', ['liste' => $products]);
    }

    public function show(request $request, $id)
    {
        if ($request->session()->has('order.' . $id)) {
            $order = $request->session()->get('order.' . $id );
            $value = $order['quantity'];
        }else {
            $value = 1;
        }
        $product = Product::find($id);

        return view('products.description', ['product' => $product, 'value' => $value]);
    }

}




