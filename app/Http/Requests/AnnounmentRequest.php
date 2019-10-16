<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnounmentRequest extends FormRequest
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
            'title'=>'required|max:70',
            'content'=>'required',
            'image'=>'mimes:jpeg,bmp,png,gif|required',
            'pop_up'=>'required|max:45'

        ];
    }
    public function messages()
    {
        $messages= [
            'title.required'=>'Phải nhập tên tiêu đề quảng cáo!',
            'title.max'=>'Độ dài tối đa là 70 kí tự.',
                'image.required'=>'Phải có ảnh tiêu đề',
            'image.mimes'=>'Định dạng ảnh được hỗ trợ là jpeg,jpg,gif,png',
            'pop_up.required'=>'Phải có thông báo quảng cáo ngắn, vui lòng điền vào trường này.',
            'pop_up.max'=>'Độ dài ký tự tối đa là 45 kí tự, để tránh trường hợp spam.',
            'content.required'=>'Cần nhập nội dung vắn tắt của quảng cáo!',
        ];
        return $messages;

    }

}
