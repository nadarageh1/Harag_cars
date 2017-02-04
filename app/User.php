<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
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

       //Add User
    public static function addUser($request){
      $user = new User(); 
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password = bcrypt($request->password);
      $user->kind =$request->kind;
      $user->save();
     }
     //Edit User
     public static function editUser($request){
     $user        =User::find($request->id); 
      $user->name =$request->name;
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
