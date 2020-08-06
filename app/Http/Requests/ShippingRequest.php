<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Please Enter Your Full Name',
            'phone.required'=>'Please Enter Your Phone',     
            'email.required'=>'Please Enter Your Email',    
            'address.required'=>'Please Enter Your Address',         
        ];
    }
}
