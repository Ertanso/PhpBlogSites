<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


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
        $username = $this->input('name');
        return [
            'password' => [
                'required',
                'string',
                'min:4',
                'max:12',
                'regex:/^(?!.*(.)\1).*$/', // Ardışık tekrar olmaması
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{4,12}$/',
                function ($attribute, $value, $fail) use ($username) {
                    if (stripos($value, $username) !== false) {
                        $fail('Şifre kullanıcı adınızı içeremez.');
                    }
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Şifre gereklidir.',
            'password.string' => 'Şifre metin olmalıdır.',
            'password.min' => 'Şifre en az 4 karakter olmalıdır.',
            'password.max' => 'Şifre en fazla 12 karakter olmalıdır.',
            'password.regex' => 'Şifre belirlenen kriterleri karşılamıyor.'
        ];
    }
}
