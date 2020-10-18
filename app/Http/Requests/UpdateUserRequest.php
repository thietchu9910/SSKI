<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'first_name' => 'Họ',
            'last_name' => 'Tên',
            'image_url' => 'Ảnh đại diện',
            'email' => 'Email',
            'birthday' => 'Ngày sinh',
            'address' => 'Địa chỉ'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'image_url' => 'image',
            'email' => 'required|email:rfc,dns|unique:users,email,'.$this->id,
            'birthday' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'email' => ':attribute không đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng'
        ];
    }
}
