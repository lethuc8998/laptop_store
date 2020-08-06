<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'repassword'=>'required|same:password',
            'name'=>'required',
            'phone'=>'required|min:10|unique:tbl_user,phone',
            'email'=>'required|unique:tbl_user,email',
            'address'=>'required',
        ];
    }
    public function messages(){
        return [
            'username.required'=>'Please Enter User Name',
            'username.unique'=>'This User Name existed',
            'password.required'=>'Please Enter Password',       
            'password.min'=>'Minimum is 6 characters',       
            'repassword.required'=>'Please Enter Repassword',    
            'repassword.same'=>'Repassword must be like password',    
            'name.required'=>'Please Enter Name',    
            'phone.required'=>'Please Enter Phone',    
            'phone.min'=>'Minimum is 10 characters',
            'phone.unique'=>'This Phone existed',    
            'email.required'=>'Please Enter Name', 
            'email.unique'=>'This Email existed',
            'address.required'=>'Please Enter Address', 
        ];
    }
}
