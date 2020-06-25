<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:20',
            'content' => 'required|max:400',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力して下さい。',
            'title.max' => 'タイトルは20字以内です。',
            'content.required' => 'コンテンツは必ず入力して下さい。',
            'content.max' => 'コンテンツは400字以内です。',
        ];
    }
}
