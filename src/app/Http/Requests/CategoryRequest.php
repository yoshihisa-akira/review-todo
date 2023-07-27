<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required','string','max:10','unique:categories'],
        ];
    }

    public function messages()
        {
            return [
                'name.required' => 'カテゴリを入力してね',
                'name.string' => '文字列で入力してね',
                'name.max' => '10文字以下でお願い',
                'name.unique' => '同じ名前のカテゴリは使えないよ！',
            ];
        }
}
