<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { 
        if(auth()->guard('admin')){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {
        // validation for Add Or Edit User
         return [
            'name'    =>'required|min:4|max:19',
            'email'   =>'required|unique:users|email',
            'password'=>'required|min:8|max:16|confirmed',
            'kind'    =>'required',
              ];
    }
  
}
