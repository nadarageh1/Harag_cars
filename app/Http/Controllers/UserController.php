<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UserRequest;
/**
* All about users is here
*
* Coltroller for users
*/
class UserController extends Controller
{

     /**
     * Show All User In this Page 
     *
     */
   
    public function showUsers()
    {
        $users =User::all();
       return view('admins.users.show-users')->with('users',$users); 
    }

     /**
     *Add  User 
     */
     public function addUser (){
          return view('admins.users.add-user');
     }

     /**
     *Post Add  User and Products all....
     */
     public function postAddUser (UserRequest $request){
      User::addUser($request);
      return redirect('Admins/AllUsers');
     }
     
    /**
     *Show This  User 
     */
  
    public function showUser($id)
     {
         $user =User::find($id); 
         return view('admins.users.show-user')->with('user',$user);   
     }
      /**
     * Edit INformation User  in page
     *
     */
      public function editUser($id)
     {
          $user =User::find($id); 
         return view('admins.users.edit-user')->with('user',$user); 
            
     }
    /**
     * Post Edit INformation User  in page
     *
     */
      public function PostEditUser(Request $request,$id)
     {
        User::editUser($request);
        return redirect('Admins/AllUsers');
     }
    
      /**
     * delete  User  From App
     *
     */
      public function deleteUser($id)
     {
        $user =User::find($id);
        $user->delete();
        return redirect('Admins/AllUsers');
            
     }
  }