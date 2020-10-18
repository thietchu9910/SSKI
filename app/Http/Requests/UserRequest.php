<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'password' => 'Mật khẩu',
            'image_url' => 'Ảnh đại diện',
            're_password' => 'Xác nhận mật khẩu',
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
            'password' => 'required',
            're_password' => 'required|same:password',
            'image_url' => 'image',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'birthday' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'same' => 'Phải nhập lại giống mật khẩu',
            'email' => ':attribute không đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng'
        ];
    }
}
