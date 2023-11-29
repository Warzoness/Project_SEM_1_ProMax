<?php

namespace App\Http\Requests\Admin\Sales;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriesRequest extends FormRequest
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
            'name'=>'required|unique:categories,id,'.$this->request->get('id'),
            'photo' => 'image',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên nhãn hàng không được để trống !',
            'name.unique'=> $this->name.' đã tồn tại !',
            'photo.image' => 'Ảnh nhãn hàng sai định dạng !',
        ] ;
    }
}