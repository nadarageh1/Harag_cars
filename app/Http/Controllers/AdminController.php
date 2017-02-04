<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Mark;
use App\ModelCar;
use App\Product;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admins.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return 
     */
      public function postLogin(Request $request)
    {
        $email             =$request->email;
        $password          = $request->password;
            $credintials =['email'=>$email , 'password' =>$password];
        if(auth()->guard('admin')->attempt($credintials)){
        return redirect('Admins/dashboard');
        }
        else{
         return 'Invalid Login';
        }
    }
    /**
     *Show all Users and Products all....
     */
     public function dashboard (){
       $userNumber   = User::count();
       $markNumber   = Mark::count();
       $modelNumber  = ModelCar::count();
       $productNumber= Product::count();
        return  view('admins.dashboard')->with('userNumber',$userNumber)
       ->with('markNumber',$markNumber) ->with('modelNumber',$modelNumber)
        ->with('productNumber',$productNumber);
     }
     /**
     * Show All Admin In this Page 
     *
     */
     public function showAdmins()
    {
        $admins =Admin::all();
       return view('admins.show-admins')->with('admins',$admins); 
    }
     /**
     * Show All Admin In this Page 
     *
     */
     public function addAdmin()
    {
       return view('admins.admin.add-admin'); 
    }
    /**
     * Post Add Admin 
     *
     */
     public function postAddAdmin(UserRequest $request)
    {
      Admin::addAdmin($request);
      return redirect('Admins/AllAdmins');
    }

      /**
     * Show information of this  Admin In this Page 
     *
     */
     public function showAdmin($id)
    {
        $admin =Admin::find($id); 
         return view('admins.admin.show-admin')->with('admin',$admin);   
    }
    
     /**
     * Show All Admin In this Page 
     *
     */
     public function editAdmin($id)
    {
         $admin =Admin::find($id); 
         return view('admins.admin.edit-admin')->with('admin',$admin);
    }

    /**
     * Show All Admin In this Page 
     *
     */

     public function postEditAdmin(UserRequest $request,$id)
    {
        Admin::editAdmin($request);
        return redirect('Admins/AllAdmins');
    }

    /**
     * Delete This Admin From Site 
     *
     */
     public function deleteAdmin($id)
    {
        $user =Admin::find($id);
        $user->delete();
        return redirect('Admins/AllAdmins');
    }
     
     /**
     **
     ** LogOut This Admin
     ** 
     */
      public function logoutAdmin()
    {
        Auth::logout();
        return redirect('Admins');
    }

 
}
