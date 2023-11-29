<?php

namespace App\Http\Requests\Admin\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountsRequest extends FormRequest
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
            'email'=>'required|email|unique:users',
            'password'=>'required|alpha_num|min:6|max:16',
            'address'=>'alpha_num|min:6',
            'phone'=>'regex:/^([0-9\s\-\+\(\)]*)$/|unique:users',
        ];
    }

    public function messages(){
        return[
            'fullname.required'=>'Trường tên không được để trống',
            'fullname.min'=>'Tên quá ngắn',
            'photo.image'=>'Ảnh không đúng định dạng',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>$this->email.' đã được sử dụng , vui lòng chọn email khác',
            'password.required'=>'Mật khẩu không được để trống',
            'password.alpha_num'=>'Vui lòng nhập mật khẩu chỉ có chữ và số',
            'password.min'=>'Mật khẩu phải dài hơn 6 ký tự',
            'password.max'=>'Mật khẩu không dài quá 16 ký tự',
            'address.alpha_num'=>'Vui lòng nhập mật khẩu chỉ có chữ và số',
            'address.min'=>'Địa chỉ phải dài hơn 6 ký tự',
            'phone.required'=>'Số điện thoại không được để trống',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
            'phone.unique'=>'SĐT đã được sử dụng, vui lòng chọn SĐT khác',
        ];
    }
}