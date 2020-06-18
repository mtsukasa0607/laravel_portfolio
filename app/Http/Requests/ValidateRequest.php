<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        // if ($this->path() == 'hello/messageShow')
        // {
        //     
        // } else {
        //     return false;
        // }
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
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力して下さい。',
            'content.required' => 'コンテンツは必ず入力して下さい。',
        ];
    }





}
