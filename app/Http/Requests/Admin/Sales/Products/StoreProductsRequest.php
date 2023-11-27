<?php

namespace App\Http\Requests\Admin\Sales\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
            "name"=>"required|min:3|unique:products",
            "category_id"=>"required",
            "tag"=>"required",
            "description"=>"required",
            "photo"=>"required|image"
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Tên sản phẩm không được để trống",
            "name.min"=>"Tên sản phẩm quá ngắn",
            "name.unique"=>"required",
            "category_id.required"=>"Danh mục không để trống",
            "tag.required"=>"Tag không được để trống",
            "description.required"=>"Mô tả không để trống",
            "photo.required"=>"Ảnh không được để trống",
            "photo.image"=>"Ảnh sai định dạng !"
        ];
    }
}