<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'content' => ['required', 'max:1000'],
            'age' => ['required', 'integer', 'min:1', 'max:100'],
            'gender' => ['required', 'integer', 'in:1,2,3']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'name.max' => '名前は255文字以内で入力してください。',
            'email.required' => 'メールアドレスは必ず入力してください。',
            'email.email' => 'メールアドレス形式で入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'content.required' => 'お問い合わせ内容は必ず入力してください。',
            'content.max' => 'お問い合わせ内容は1000文字以内で入力してください。',
            'age.required' => '年齢は必ず入力してください。',
            'age.integer' => '年齢は数字で入力してください。',
            'age.min' => '年齢は1以上で入力してください。',
            'age.max' => '年齢は100以下で入力してください。',
            'gender.required' => '性別は必ず入力してください。',
            'gender.integer' => '性別は数字で入力してください。',
            'gender.in' => '性別は数字の1・2・3のいずれかで入力してください。',
        ];
    }
}
