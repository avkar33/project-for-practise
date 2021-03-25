<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'size:6']
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Заполните поле :attribute',
            'name.min' => 'Имя пользователя должно быть не менее :min символов.',
            'email.unique' => 'Данная почта уже используется.',
        ];
    }
}
