<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoValidateRequest extends FormRequest
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
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240|',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力して下さい。',
            'title.max' => 'タイトルは20字以内です。',
            'content.required' => 'コンテンツは必ず入力して下さい。',
            'content.max' => 'コンテンツは400字以内です。',
            'file.required' => '画像は必ず選択して下さい。',
            'file.image' => '指定されたファイルが画像ではありません。',
            'file.mimes' => '指定された拡張子（PNG/JPG/JPEG/GIF）ではありません。',
            'file.max' => 'サイズが10MBを超えています。',
        ];
    }
}
