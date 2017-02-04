<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
      
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
       //Add Admin
    public static function addAdmin($request){

      $user = new Admin(); 
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password = bcrypt($request->password);
      $user->kind =$request->kind;
      $user->save();

     }
     
     //Edit User
     public static function editAdmin($request){
     $user =Admin::find($request->id); 
      $user->name=$request->name;
      if($request->password ==""){
        $user->password =$user->password;
      }
      else{
        $user->password = bcrypt($request->password);
      }
       $user->kind =$request->kind;
        $user->save();
     }


}
