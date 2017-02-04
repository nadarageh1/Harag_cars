<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Admin;
use App\ModelCar;
use File;
class ProductController extends Controller
{
     /**
     * Show All Products In this Page 
     *
     */
     public function showProducts()
    {
        $products =Product::all();
         return view('admins.products.show-products')->with('products',$products); 

    }
     /**
     * Add new Product
     *
     */
     public function addProduct()
    {
        $admins =Admin::all();
        $models =ModelCar::all();
       return view('admins.products.add-product')->with('admins',$admins)
       ->with('models',$models); 
    }
    /**
     * Post Add Product 
     *
     */
     public function postAddProduct(ProductRequest $request)
    {
      Product::addProduct($request);
      return redirect('Admins/AllProducts');
    }

      /**
     * Show information of this  Product In this Page 
     *
     */
     public function showProduct($id)
    {
        $admins =Admin::all();
        $models =ModelCar::all();
        $product =Product::find($id); 
         return view('admins.products.show-product')->with('product',$product)
         ->with('models',$models)->with('admins',$admins);   
    }
    
     /**
     *  Edit This Product 
     *
     */
     public function editProduct($id)
    {
         $admins =Admin::all();
         $models =ModelCar::all();
         $product =Product::find($id); 
         return view('admins.products.edit-product')->with('product',$product)
         ->with('models',$models)->with('admins',$admins);
    }

    /**
     * Show All Admin In this Page 
     *
     */

     public function postEditProduct(ProductRequest $request,$id)
    {
        Product::editProduct($request);
        return redirect('Admins/AllProducts');
       
    }

      /**
     * Delete This Product From Site 
     *
     */
     public function deleteProduct($id)
    {
        $product =Product::find($id);
        $product->delete();
        File::delete($product->product_pic);
        return redirect('Admins/AllProducts');
    }
}
