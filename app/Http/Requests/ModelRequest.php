<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelRequest extends FormRequest
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
        'name'   =>'required|min:4|max:18',
        'date'   =>'required|date',
        'mark'   =>'required',
        'status' =>'required',
        ];
    }
}
