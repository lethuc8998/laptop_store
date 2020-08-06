<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'txtNameCategory'=>'required|unique:tbl_category,category_name',
            'txtDesCategory'=>'required',
        ];
    }
    public function messages(){
        return [
            'txtNameCategory.required'=>'Please Enter Category Name',
            'txtNameCategory.unique'=>'This Category Name existed',
            'txtDesCategory.required'=>'Please Enter Category Description',    
        ];
    }
}
