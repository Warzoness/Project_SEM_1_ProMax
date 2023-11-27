<?php

namespace App\Http\Requests\Admin\Sales\Brands;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=> "required|unique:brands",
            "photo"=>"required|image"
        ];
    }

    public function messages(){
        return [
            "name.required"=> "Tên nhãn hàng không được để trống !",
            "name.unique"=>$this->name." đã tồn tại, vui lòng nhập tên khác !",
            "photo.required"=>"Logo nhãn hàng không được để trống !",
            "photo.image" => "Logo nhãn hàng phải là định dạng ảnh !"
        ];
    }
}