<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'mail' => ['required','email', 'max:255'],
            'pass' => ['required', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', 'min:8', 'confirmed'],
            'pass_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ニックネームを入力してください',
            'mail.required' => 'メールアドレスを入力してください',
            'mail.email' => 'メールアドレスの形式で入力してください',
            'mail.max:255' => '255文字以内で入力してください',
            'pass.required' => 'パスワードを入力してください',
            'pass.regex' => '半角英字、数字をそれぞれ含めて8文字以上で入力してください',
            'pass.min' => '8文字以上で入力してください',
            'pass.confirmed' => 'パスワード再入力結果と一致しておりません',
            'pass_confirmation.required' => 'パスワードを再入力してください',
        ];
    }
}
