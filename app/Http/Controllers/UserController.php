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
        $user = Auth::user();
        $orders = Order::where('customer_id', $user->customer->id)->get();

        $listOfOrders = [];

        foreach ($orders as $order){

            $quantity = 0;
            $total =0;

            foreach ($order->articles as $article){
                $quantity += $article->pivot->qty;
                $total += $article->pivot->qty * $article->price;
            }
            $currentOrder = ['order' => $order, 'quantity' => $quantity, 'total'=> $total];

            array_push($listOfOrders, $currentOrder);
        }

        return view('User.view', ['user' => $user, 'listOfOrders' => $listOfOrders]);
    }
    
    public function updateAccount(Request $request, $id){
        $customers = Customer::find($id);
        $users = User::All();
        return view('User.view', ['customers'=>$customer, 'users'=>$user]);
    }
    
    public function saveUpdate(Request $request){
        // $request->validate([
            //     'name' => 'required|unique:name',
            //     'first-name' => 'required|unique:first_name',
            //     'email' => 'required',]);
            $user = Auth::user();
            $customer = Customer::find($user->customer->id);
            $customer-> name = $request -> name;
            $customer-> first_name = $request -> first_name;
            $user-> email = $request -> email;
            $customer -> save();
            $user -> save();
            return redirect(route('userAccount'));
        }
        
        public function addressUpdate(Request $request){
            $address = Address::find($request->address_id);
            return view('User.updateAddress',['address'=>$address]);
        }
        
        public function updateSave(Request $request){
            // $request->validate([
                //     'name' => 'required|unique:name',
                //     'first-name' => 'required|unique:first_name',
                //     'email' => 'required',]);
                $user = Auth::user();
                $address = Address::find($request->address_id);
                
                $address-> street1 = $request ->street1;
                $address-> street2 = $request ->street2;
                $address-> postcode = $request ->postcode;
                $address-> city = $request ->city;
                $address-> country = $request ->country;
                
                $address -> save();
                return redirect(route('userAccount'));
            }
            
            
            public function deleteAccount($id){
                return view('basic.home');
            }
            
            public function showOrdersAll(){
                return view('User.orders');
            }

        }
