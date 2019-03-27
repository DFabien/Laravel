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

    public function showDelivAll(){
        $deliveries = config('delivery');
        return view('Admin.delivery' , ['deliveries' => $deliveries]);
    }

}
