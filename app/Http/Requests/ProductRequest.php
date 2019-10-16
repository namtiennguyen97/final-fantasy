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
    public function rules()
    {
        return [
            'name'=>'required|max:25|min:3',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric',
            'detail'=>'required',
            'image'=>'mimes:jpeg,bmp,png,gif',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Bắt buộc phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm ít nhất là 3 và nhiều nhất là 25!',
            'name.max' => 'Tên sản phẩm ít nhất là 3 và nhiều nhất là 25!',
            'price.required'=>'Phải nhập giá thành sản phẩm.',
            'detail.required' => 'Cần nhập chi tiết sản phẩm!',
            'old_price.required'=>'Cần nhập giá trước khi sale!',
            'old_price.numeric'=>'Giá nhập phải là chữ số!',
            'price.numeric' => 'Giá thành phải nhập chữ số!',
            'image.mimes'=>'Ảnh chỉ được hỗ trợ dạng Jpeg,bmp,gif,png'

        ];

        return $messages;
    }


}
