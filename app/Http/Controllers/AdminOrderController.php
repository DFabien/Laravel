<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;
use App\Customer;

class AdminOrderController extends Controller
{
    
    public function historicOrder(){
        $orders = Order::all();
        $articles = Article::all();
        
        return view('Admin.historicOrder', ['orders' => $orders, 'articles' => $articles]);
    }
    
    public function detailOrder($id){
        $orders = Order::find($id);
        $articles = Article::all();
        $customer = Customer::all();
        
        return view('Admin.historicDetail', ['order' => $orders, 'articles' => $articles, 'customer' => $customer]);
    }
    
}