<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'oldpassword'=>'required|exists:tbl_user,password',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
        ];
    }
    public function messages(){
        return [
            'oldpassword.required'=>'Please Enter Old Password',
            'oldpassword.exists'=>'This password is wrong',
            'password.required'=>'Please Enter Password',       
            'password.min'=>'Minimum is 6 characters',       
            'repassword.required'=>'Please Enter Repassword',    
            'repassword.same'=>'Repassword must be like password',     
        ];
    }
}
