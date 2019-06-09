<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // todo 04: フォームリクエストの authorize 無効
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // todo 04: フォームリクエストの validation を実装
        return [
            'title' => 'required|unique:posts|max:20',
            'body' => 'required',
        ];
    }

    // todo 04: フォームリクエストのエラーメッセージを実装
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須項目です。',
            'title.max' => 'タイトルは 20 文字以内で入力してください。',
            'body.required' => '本文は必須項目です。',
        ];
    }
}
