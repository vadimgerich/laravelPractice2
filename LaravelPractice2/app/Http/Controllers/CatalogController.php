<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function catalog(Request $request){
        if($request->has('product_search')){
            $products = DB::table('products')
                ->where('selling_price','>',$request->get('price_min'))
                ->where('selling_price','<',$request->get('price_max'))
                ->where('product_name','like','%'.$request->get("product_search").'%')
                ->get();
        }else{
            $products = DB::table('products')->get();
        }
        return view('catalog')->with(['products'=>$products]);
    }
}
