<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Product;
use App\Order;

class BasketController extends Controller
{
    public function show(Request $request)
    {

        $articles = [];
        $total = 0;
        if ($request->session()->has('order')) {
            $articles = $request->session()->get('order');

            foreach ($articles as $article){
                $total += $article['quantity'] * ($article['product']->price /100);
            }
        }
        return view('basket.basket', ['articles' => $articles, 'total' => $total]);
    }

    public function update()
    {
        return view('basket.basket');
    }

    public function delete(Request $request, $id)
    {
        $request->session()->forget('order.' . $id);

        return redirect(route('basket'));
    }

    public function discount($codePromo)
    {
        return view('basket.basket');
    }

    public function add(Request $request)
    {
        $product = Product::find($request->id);

        $array = ['product' => $product, 'quantity' => $request->quantity];

        $request->session()->put('order.' . $request->id, $array);

        return redirect(route('products'));
    }

    public function validation(Request $request){
        $order = new Order();

        $order->user_id = 3;

        $order->save();

        $orders = Order::find($order->id);

        $articles = $request->session()->get('order');

        foreach ($articles as $article){

            $orders->product()->attach($article['product']->id, ['quantity' => $article['quantity']]);

        }

        $request->session()->forget('order');

        return redirect(route('products'));
    }

}
