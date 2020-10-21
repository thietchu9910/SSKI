<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
    public function attributes()
    {
        return [
            'name' => 'Sản phẩm',
            'description' => 'Mô tả',
            'price' => 'Giá',
            'sale_percent' => 'Mã giảm giá',
            'stocks' => 'Cổ phần',
            'image_url' => 'Ảnh đại diện',
        ];
    }
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'description' => 'required|max:225',
            'sale_percent' => 'required|numeric|between:20,80',
            'stocks' => 'required|numeric',
            'price' => 'required|min:0',
            'image_url' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute phải ít hơn 225 kí tự',
            'numeric' => ':attribute phải là chữ số',
            'between' => ':attribute trong khoảng từ 20->80%',
            'mimes' => ':attribute định dạng jpg, png, jpeg,...',
            'image_url.max' => ':attribute nhỏ hơn 2mb',
            'min' => ':attribute sản phẩm lớn hơn 0',
        ];
    }
}
