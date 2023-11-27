<?php

namespace App\Http\Requests\Admin\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordsRequest extends FormRequest
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
            'newPassword'=>'required|alpha_num|min:6|max:16',
            
        ];
    }

    public function messages(){
        return[
            'newPassword.required'=>'Mật khẩu không được để trống',
            'newPassword.alpha_num'=>'Vui lòng nhập mật khẩu chỉ có chữ và số',
            'newPassword.min'=>'Mật khẩu phải dài hơn 6 ký tự',
            'newPassword.max'=>'Mật khẩu không dài quá 16 ký tự',
        ];
    }
}