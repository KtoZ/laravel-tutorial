<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // todo 04: フォームリクエストの authorize 無効
        return false;
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
            //
        ];
    }

    // todo 04: フォームリクエストのエラーメッセージを実装
}
