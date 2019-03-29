<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Discount;

class AdminDiscountController extends Controller
{

    public function showDiscAll(){
        $discounts = Discount::All();
        return view('Admin.discount', ['discounts' => $discounts]);
    }

    public function addDiscount(){
        return view('Admin.addDiscount');
    }

    public function updateDiscount($id){
        $discount = Discount::find($id);
        return view('Admin.updateDiscount', ['discount' => $discount]);
    }

    public function deleteDiscount($id){
        $discount = Discount::find($id);
        $discount->delete();
        return redirect(route('adminDiscount'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|between:3,255|alpha',
            'value'=>'required|numeric|min:0',

        ]);
        $discount = new Discount();
        $discount->start_date =  date("Y-m-d", strtotime($request->input('start_date')) ); //formate la date pour la passer de la version anglaise à francaise
        $discount->end_date = date("Y-m-d", strtotime($request->input('end_date')) );

        $discount->name = $request->input('name');
        $discount->promo_type = $request->input('promo_type');
        $discount->value = $request->input('value');

        $discount->save();

        return redirect(route('adminDiscount'));
    }
    public function storeUpdate(Request $request){
        $discount = Discount::find($request->input('id'));

        $discount->start_date =  date("Y-m-d", strtotime($request->input('start_date')) ); //formate la date pour la passer de la version anglaise à francaise
        $discount->end_date = date("Y-m-d", strtotime($request->input('end_date')) );

        $discount->name = $request->input('name');
        $discount->promo_type = $request->input('promo_type');
        $discount->value = $request->input('value');

        $discount->save();

        return redirect(route('adminDiscount'));
    }


}
