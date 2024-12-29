<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|unique:users',
            'name'     => 'required|min:4|max:15',
            'password' => 'required',

            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'email is required',
            'name.required'     => 'name is required',
            'password.required' => 'password is required',
            'email.unique'      => 'email already exists',
            'name.min'          => 'name: min 4 characters',
            'name.max'          => 'name: max 15 characters',

            'g-recaptcha-response.required' => 'captcha is required',
            'g-recaptcha-response.captcha'  => 'invalid captcha',
        ];
    }
}
