<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function add(){
        return view('Address.addressAdd');
    }

    public function store(Request $request){

        $address = new Address();
        $address->street1 = $request->street1;
        $address->street2 = $request->street2;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->country = $request->country;
        $address->customer_id = Auth::user()->customer->id;

        $address->save();

        return redirect(route('infos'));
    }

    public function update($id){
        $address = Address::find($id);

        return view('Address.addressUpdate', ['address' => $address]);
    }

    public function storeUpdate(Request $request){

        $address = Address::find($request->id);
        $address->street1 = $request->street1;
        $address->street2 = $request->street2;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->country = $request->country;

        $address->save();

        return redirect(route('infos'));
    }
}
