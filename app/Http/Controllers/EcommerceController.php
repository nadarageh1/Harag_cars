<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use App\Product;
use App\ModelCar;
use App\Mark;
use Auth;

class EcommerceController extends Controller
{

    public function __constractor(){
    }
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $marks =Mark::all();
        $models =ModelCar::all();
        return view('site.site_login',compact('marks','models'));
    }
    /**
     * Post Search 
     * 
     */
    public function postSearch(Request $request)
    {
        $model         =$request->model;
        $product       =$request->product;
        $products  = Product::join('models','products.model_id','=','models.id')
                             ->where('models.name',$model)
                             ->where('products.name',$product)
                             ->select('models.*','products.*')
                             ->get();
          if(count($products) > 0) {
             return view('site.search_product', compact('products'));   
          }   
         else{
            return redirect('Ecommerce');
         }             
                        
    }
    /**
     * 
     *Post Login 
     * 
     */
    public function postLogin(Request $request)
    {
    $email    = trim($request->email);
    $password = trim($request->password);
    // method to login 
     
       if (Auth::attempt(['email' => $email, 'password' => $password ])) {
        // return view('users.profile')->with('user',$user);
        return redirect('Ecommerce/profile');
      }
    else{
        return 'Invalid LOgin ';
    }
    }
    /**
     * 
     * Post register 
     * 
     */
    public function postRegister(UserRequest $request)
    {
      User::addUser($request);
      return 'now, You Have Account ';
    }
      /**
     * 
     * Get Profile Of This 
     * 
     */
    public function profile()
    {
        $id =Auth::id();
        $user =User::find($id);
        return view('users.profile')->with('user',$user);
    }
      /**
     * 
     * Get model page Of This 
     * 
     */
    public function ModelPage($id)
    {
       $model =ModelCar::find($id);
       return view('site.model_page',compact('model'));
    }
    /**
     * Edit This User
     *
     * 
     */
    public function editUser($id){
       $user =User::find($id);
       return view('users.edit-user')->with('user',$user); 
    }
     /**
     * Post Edit This User
     *
     * 
     */
    public function postEditUser(AdminRequest $request,$id){
        User::editUser($request);
        return redirect('Ecommerce/profile');  
    }

    /**
     * LOgOut This User
     *
     * 
     */
    public function logoutUser(){
        Auth::logout();
        return redirect('Ecommerce');  
    }
   
}
