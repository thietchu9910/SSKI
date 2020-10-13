<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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

//    Khong can dung
//    public function attributes()
//    {
//        return [
//
//        ];
//    }
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
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required',
            're_password' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Họ không được để trống.',
            'last_name.required' => 'Tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã được sử dụng, vui lòng dùng email khác',
            'password.required' => 'Password không được để trống.',
            're_password.required' => 'Bạn hãy nhập lại password vào đây.',
            're_password.same' => 'Bạn nhập không đúng password ở trên.'
        ];
    }
}
