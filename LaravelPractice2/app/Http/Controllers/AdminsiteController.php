<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsiteController extends Controller
{
    public function add_new_product(){
        return view('add_new_product');
    }
}
