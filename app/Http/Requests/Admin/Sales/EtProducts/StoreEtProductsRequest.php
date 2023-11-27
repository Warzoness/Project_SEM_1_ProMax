<?php

namespace App\Http\Requests\Admin\Sales\EtProducts;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtProductsRequest extends FormRequest
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
            'name'=>'required|nique:eeach_type_products',
            'price'=>'required|numeric|min:0',
            'sale_price'=>'numeric|min:0|lt:price',
            'product_id'=>'required|exists:products,id',
            'color'=>'required',
            'type'=>'required',
            'tag'=>'required',
            'quantity'=>'required|integer|min:0',
            'photo'=>'requỉed|image'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Tên sản phẩm không để trống',
            'name.unique'=>$this->name.' đã tồn tại, vui lòng chọn tên khác !',
            'price.required'=>'Giá sản phẩm không được để trống',
            'price.numeric'=>'Giá sản phẩm phải là số',
            'price.min'=>'Vui lòng để giá sản phẩm lớn hơn 0',
            'sale_price.required'=>'Giá sản phẩm không được để trống',
            'sale_price.lt'=>'Giá sản phẩm phải nhỏ hơn giá gốc',
            'sale_price.min'=>'Vui lòng để giá sản phẩm lớn hơn 0',
            'product_id.required'=>'Loại sản phẩm không được để trống',
            'product_id.exists'=>'Loại sản phẩm không tồn tại ',
            'color.required'=>'Màu không được để trống',
            'type.required'=>'Kiểu mã không được để trống',
            'tag.required'=>'Xin vui lòng điền tag',
            'quantity.required'=>'Vui lòng nhập số lượng sản phẩm',
            'quantity.integer'=>'Vui lòng nhập đúng định dạng số nguyên lớn hơn 0',
            'quantity.min'=>'Vui lòng nhập số lượng sản phẩm lớn hơn 0',
            "photo.required"=>"Ảnh không được để trống",
            "photo.image"=>"Ảnh sai định dạng !"
        ];
    }
}