<?php

namespace App\Http\Requests\banner;

use Illuminate\Foundation\Http\FormRequest;

class bannerShow extends FormRequest
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

            'name'=> 'required|unique:banner,name',

            'code'=> 'unique:banner,code',
            
            'image'=>'required',
            
            'description'=>'required',

            'link'=>'required'
        ];
    
    }

     public function messages()
    {
        return [

            'name.required'=> 'Dữ liệu không được bỏ trống',

            'name.unique'=> 'Dữ liệu đã có trong hệ thống',

            'image.required'=>'Dữ liệu không được bỏ trống',
            
            'description.required'=>'Dữ liệu không được bỏ trống',

            'link.required'=>'Dữ liệu không được bỏ trống'
        ];
    
    }





}
