<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Order;
use App\Customer;
use App\Address;
use App\User;

class UserController extends Controller
{

    public function profil(){
        $user = User::find(Auth::id());
        $orders = Order::all()->sortByDesc('date');
        $articles = Article::all();
        return view('User.view', ['user' => $user, 'orders' => $orders, 'articles' =>$articles]);
    }

    public function updateAccount(Request $request, $id){
        $customers = Customer::find($id);
        $users = User::All();
        $orders = Order::all();
        $addresses = Address::All();
        return view('User.view', ['orders' => $orders, 'customers'=>$customer, 'users'=>$user, 'addresses'=>$address]);
    }

    public function updateAccount2(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:name',
            'first-name' => 'required|unique:first_name',
            'email' => 'required',
            'street1' => 'required',
            'street2' => 'required',
            'postcode' => 'required|numeric',
            'city' => 'required',
            'country' => 'required']);
            $modif = User::find($id);
            $modif -> name = $request -> name;
            $modif -> first_name = $request -> first_name;
            $modif -> email = $request -> email;
            $modif -> street1 = $request -> street1;
            $modif -> street2 = $request -> street2;
            $modif -> postcode = $request -> postcode;
            $modif -> city = $request -> city;
            $modif -> country = $request -> country;
            $modif -> save();
        return view('User.view');
    }

    public function deleteAccount($id){
        return view('basic.home');
    }

    public function showOrdersAll(){
        return view('User.orders');
    }

    public function showOrder($id){
        return view('User.orderDetail');
    }
}
