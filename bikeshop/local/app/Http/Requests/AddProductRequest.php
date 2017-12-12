<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class AddProductRequest extends FormRequest
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
            'txtMa' => 'required|unique:products,id',
            'txtName' => 'required',
            'txtGia' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtMa.required' => 'Vui lòng nhập mã sản phẩm',
            'txtMa.unique' => 'Mã sản phẩm đã tồn tại',
            'txtName.required' => 'Vui lòng nhập tên sản phẩm',
            'txtGia.required' => 'Vui lòng nhập giá sản phẩn'
        ];
    }
}
