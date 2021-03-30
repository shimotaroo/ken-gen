<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SymbolRequest extends FormRequest
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
            'symbol' => ['required', 'string', 'size:9']
        ];
    }

    /**
     * カスタムメッセージの定義
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'symbol.required' => '何も入力されていません',
            'symbol.string' => '文字列で入力してください',
            'symbol.size' => '9文字で入力してください',            
        ];
    }

    /**
     * [override] バリデーション失敗時ハンドリング
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     * @throw HttpResponseException
     *
     */
    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'status' => 422,
            'errors' => $validator->errors()->toArray(),
        ]);

        throw new HttpResponseException($response);
    }
}
