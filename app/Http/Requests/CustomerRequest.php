<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'username'=>'required|unique:tbl_user,username',
            'password'=>'required|min:6',
            're_password'=>'required|same:password',
            // 'name'=>'required',
            // 'email'=>'required|unique:tbl_user,email',
            // 'phone'=>'required|unique:tbl_user,phone',
            // 'address'=>'required',
        ];
    }
    public function messages(){
        return [
            'username.required'=>'Please Enter Username',
            'username.unique'=>'This username existed',  
            'password.required'=>'Please Enter Password',       
            'password.min'=>'Minimum 6 characters',       
            're_password.required'=>'Please Enter Repassword',    
            're_password.same'=>'Are you sure this same password ?', 
            // 'name.required'=>'Please Enter Name',    
            // 'email.required'=>'Please Enter Email', 
            // 'email.unique'=>'This Email existed', 
            // 'phone.required'=>'Please Enter Phone',     
            // 'phone.unique'=>'This Phone existed', 
            // 'address.required'=>'Please Enter Address',  
        ];
    }
}
