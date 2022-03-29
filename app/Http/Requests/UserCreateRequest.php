<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',// confirm в документации сравнение password и password2
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'firstName.required' => "Введите имя",
            'lastName.required' => "Введите фамилию",
            'email.required' => "Введите email",
            'password.required' => "Введите пароль",
            'password_confirmation.required' => "Повторите пароль",
            // 'password_confirmation.confirmed' => "Пароли не совпадают"    
        ];
    }
}
