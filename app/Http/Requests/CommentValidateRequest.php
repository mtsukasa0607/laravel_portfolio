<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentValidateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'comment' => 'required|max:140',
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'コメントは必ず入力して下さい。',
            'comment.max' => 'コメントは140字以内です。',
        ];
    }
}
