<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class ProductController extends Controller
{
    public function doadd_product(Request $request){
        $request->validate([
           'product_name'=>'required|min:5|max:35',
            'product_sku'=>'required|min:5|max:15',
            'product_buying_price'=>'required|min:1|max:99999',
            'product_selling_price'=>'required|min:1|max:99999'
        ]);

        $name = $request->get('product_name');
        $sku = $request->get('product_sku');
        $buying_price = $request->get('product_buying_price');
        $selling_price = $request->get('product_selling_price');
        $dicount = $request->get('product_discount',0);

        if($request->has('product_photo')){
            $photo = $request->file('product_photo');
            $filename = uniqid().'.'.$photo->extension();

            mkdir(public_path('storage\products_images\\'.$sku));
            $destinationPath = public_path('storage\products_images\\'.$sku);
            $img = \Intervention\Image\Facades\Image::make($photo->path());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . "\\" . $filename);

//            $photo->store('storage/'.$sku.$filename.'.'.$photo->extension());
//
//            $photo_to_resize = public_path('public/'.$sku.'/'.$filename.$photo->extension());
//
//            $resized_img = (new \Intervention\Image\Image)->make($photo_to_resize)->resize(300,300, function ($constraint){
//               $constraint->aspectRatio();
//            });
//            $resized_img->save();
        }else{
            $filename='standart_photo.jpg';
        }

        DB::table('products')->insert([
            'product_name' => $name,
            'SKU' => $sku,
            'image' => $filename,
            'buying_price' => $buying_price,
            'selling_price' => $selling_price,
            'discount' => $dicount
        ]);

        return redirect('/catalog');
    }
}
