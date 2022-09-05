<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage(Request $request){
        return view('mainpage')->with(['request'=>$request]);
    }

    public function registration(Request $request){
        return view('registration');
    }

    public function login(Request $request){
        return view('login')->with(['error'=>$request->get('error')]);
    }

    public function adminsite(Request $request){
        return view('adminsite');
    }

    public function shopping_cart(Request $request){
        return view('shopping_cart');
    }
}
