<?php

namespace App\Http\Requests\Admin\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'fullname'=>'required|min:6',
            'photo'=>'image',
            'email'=>'required|email|unique:users,id,'.$this->request->get('id'),
            'address'=>'alpha_num|min:6',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,id,'.$this->request->get('id'),
        ];
    }

    public function messages(){
        return[
            'fullname.required'=>'Trường tên không được để trống',
            'fullname.regex'=>'Vui lòng điền đúng định dạng',
            'fullname.min'=>'Tên quá ngắn',
            'photo.image'=>'Ảnh không đúng định dạng',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>$this->email.' đã được sử dụng , vui lòng chọn email khác',
            'phone.required'=>'Số điện thoại không được để trống',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
            'phone.unique'=>'SĐT đã được sử dụng, vui lòng chọn SĐT khác',
        ];
    }
}