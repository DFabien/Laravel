<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;

class AdminController extends Controller
{
    public function home(){
        $orders = Order::all()->sortByDesc('date')->take(10);
        $articles = Article::all()->sortBy('stock')->take(10);

        return view('Admin/home', ['orders' => $orders, 'articles' => $articles]);
    }
    public function showCatAll(){
        return view('Admin/category');
    }
    public function addCat(){
        return view('Admin/addCategory');
    }

    public function updateCat($id){
        return view('Admin/updateCategory');
    }

    public function deleteCat($id){
        return view('Admin/category');
    }

    public function showProd($id){
        return view('Admin/showProduct');
    }

    public function showDiscAll(){
        return view('Admin/discount');
    }

    public function addDiscount(){
        return view('Admin/addDiscount');
    }

    public function updateDiscount(){
        return view('Admin/updateDiscount');
    }

    public function deleteDiscount($id){
        return view('Admin/discount');
    }

    public function showDelivAll(){
        $deliveries = config('delivery');
        return view('Admin.delivery' , ['deliveries' => $deliveries]);
    }

    public function historicOrder(){
        return view('Admin.historicOrder');
    }

    public function detailOrder($id){
        return view('Admin.historicDetail');
    }

    public function showUsersAll(){
        return view('Admin.users');
    }

    public function orderUser($id){
        return view('Admin.orderUser');
    }

    public function orderDetailUser ($id){
        return view('Admin.orderDetailUser');
    }

}
