<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(){
        return view('basic/home');
    }

    public function contact(){
        return view('basic/contact');
    }

    public function delivery(){
        return view('basic/delivery');
    }
}
