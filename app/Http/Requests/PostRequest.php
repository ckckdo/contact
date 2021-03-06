<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        'lastname'=>'required',
        'firstname'=>'required',
        'gender'=>'required',
        'email'=>['required','email'],
        'zip'=>['required','regex:/^[0-9]{3}-[0-9]{4}$/'],
        'address'=>'required',
        'opinion'=>['required','max:120'],
        ];
    }
    /**
 * バリーデーションのためにデータを準備
 *
 * @return void
 */
    protected function prepareForValidation()
    {
        $this->merge([
            'zip' => mb_convert_kana($this->zip, 'n'),
        ]);
    }

    public function messages()
    {
        return  [
        'lastname.required' => '姓を入力してください',
        'firstname.required' => '名を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスの形式で入力してください',
        'zip.required' => '郵便番号を入力してください',
        'zip.regex' => '半角ハイフンを入れて入力してください',
        'address.required' => '住所を入力してください',
        'opinion.required' => 'ご意見を入力してください',
        'opinion.max' => '120文字以内で入力してください',
        ];
}
}
