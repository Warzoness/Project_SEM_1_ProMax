<?php

namespace App\Http\Requests\Admin\Sales;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriesRequest extends FormRequest
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
            'name' => 'required|unique:categories',
            'photo' => 'required|image',
            'tags' => 'required',
            'brand_id'=>'required',
            'status'=>'required',
            'description'=>'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name not allow to null !',
            'name.unique'=> $this->name.' already exist !',
            'photo.required' => 'Image not allow to null !',
            'photo.image' => 'Image invalid !',
            'tags.required'=>'Tags not allow to null !',
            'brand_id.required' => 'Brand not allow to null !',
            'status.required' => 'Status not allow to null !',
            'description.required' => 'Description not allow to null !'
        ] ;
    }
}