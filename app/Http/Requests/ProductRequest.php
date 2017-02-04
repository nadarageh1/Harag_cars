<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [
            'name'=>'required|min:4|max:26',
            'desc'=>'required|min:10|max:60',
            'admin'=>'required',
            'model'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:1000',
            'status'=>'required'
        ];
    }
}
