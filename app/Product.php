<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
class Product extends Model
{
       protected $table = 'products';

       public static function addProduct($request){
        $image = date('Y-m-d-H:i:s') . "-" . $request->image->getClientOriginalName();
        $path = 'product_image/' . $image;
        Image::make($request->image->getRealPath())->save($path);
        $product      =   new Product();
        $product->name        =   $request->name;
        $product->description =   $request->desc;
        $product->product_pic =   $path;
        $product->admin_id    =   $request->admin;
        $product->model_id    =   $request->model;
        $product->status      =   $request->status;
        $product->save();

       }
        public static function editProduct($request){
        $product              =Product::find($request->id);
        $product->name        =   $request->name;
        $product->description =   $request->desc;
         if($request->image==""){
            $product->product_pic =   $product->product_pic;
         }
         else{
        $image = date('Y-m-d-H:i:s') . "-" . $request->image->getClientOriginalName();
        $path = 'product_image/' . $image;
        Image::make($request->image->getRealPath())->save($path);
         $product->product_pic =   $path;
         }
        
        $product->admin_id    =   $request->admin;
        $product->model_id    =   $request->model;
        $product->status      =   $request->status;
        $product->save();
            
       }
}
