<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show(){
        return view('customer.infos');
    }

    public function add(){
        if(!Auth::user()->customer){
            return view('customer.infosAdd');
        }

        return view('customer.infosUpdate');

    }

    public function update(){
        return view('customer.infosUpdate');
    }

    public function store(Request $request){

        $customer = new Customer();
        $customer->user_id = Auth::user()->id;
        $customer->name = $request->name;
        $customer->first_name = $request->first_name;

        $customer->save();

        return redirect(route('infos'));
    }

    public function storeUpdate(Request $request){

        $customer = Customer::find(Auth::user()->customer->id);
        $customer->name = $request->name;
        $customer->first_name = $request->first_name;
        $customer->save();

        return redirect(route('infos'));

    }
}
