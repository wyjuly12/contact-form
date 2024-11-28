<?php

namespace App\Http\Requests;

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
        // デフォルト値はFalse(403エラーになる)
        return true;
    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // ルール定義
    public function rules()
    {
        return [
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255'],
            'tel' => ['required','numeric','digits_between:10,11'],
            'content' => ['required']
        ];
    }

    // メッセージ定義
    public function messages(){
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前は文字列で入力してください',
            'name.max' => '名前は255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',            
            'email.string' => '名前は文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください', 
            'tel.numeric' => '電話番号は数値で入力してください',
            'tel.digits_between' => '電話番号は10桁から11桁の間で入力してください',             
            'content.required' => '問い合わせ内容を入力してください',          
        ];
    }



}
