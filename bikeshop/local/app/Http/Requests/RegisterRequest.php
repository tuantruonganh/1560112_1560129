<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'txtFullname'=>'required',
            'txtUsername'=>'required|email|unique:users,email',
            'txtPassword'=>'required|min:3|max:9',
            'txtRe_password'=>'required|same:txtPassword',
            'txtPhone_number'=>'required|numeric|min:10',
            'txtAddress'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'txtFullname.required'=>'Vui lòng nhập họ và tên',
            'txtUsername.required'=>'Vui lòng nhập email',
            'txtUsername.unique'=>'Email đã có người sử dụng',
            'txtPassword.required'=>'Vui lòng nhập mật khẩu',
            'txtPassword.min'=>'Mật khẩu tối thiểu 3 kí tự',
            'txtPassword.max'=>'Vui lòng tối đa 3 kí tự',
            'txtRe_password.required'=>'Vui lòng nhập lại mật khẩu',
            'txtRe_password.same'=>'Mật khẳu nhập lại không đúng',
            'txtPhone_number.required'=>'Vui lòng nhập số điện thoại',
            'txtPhone_number.numeric'=>'Số điện loại không hợp lệ',
            'txtPhone_number.min'=>'Số điện loại không hợp lệ',
            'txtAddress.required'=>'Vui lòng nhập địa chỉ'
        ];
    }
}
