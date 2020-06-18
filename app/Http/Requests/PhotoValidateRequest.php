<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoValidateRequest extends FormRequest
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
            'title' => 'required|max:20',
            'content' => 'required|max:400',
            'file' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力して下さい。',
            'content.required' => 'コンテンツは必ず入力して下さい。',
            'file.required' => '画像は必ず選択して下さい。',
        ];
    }

}
