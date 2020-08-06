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
            'txtProductName'=>'required|unique:tbl_product,product_name',
            'txtProductDesc'=>'required',
            'txtPrice'=>'required|min:0',
            'txtQuanlity'=>'required|min:0',
        ];
    }
    public function messages(){
        return [
            'txtProductName.required'=>'Please Enter Product Name',
            'txtProductName.unique'=>'This Product Name existed',
            'txtProductDesc.required'=>'Please Enter Product Description',    
            'txtPrice.required'=>'Please Enter Price',    
            'txtPrice.min'=>'Please Above 0',    
            'txtQuanlity.required'=>'Please Enter Quanlity',    
            'txtQuanlity.min'=>'Please Above 0',    
        ];
    }
}
