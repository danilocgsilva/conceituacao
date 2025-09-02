<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class RemoveMyselfRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'password' => 'required|current_password'
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'A senha é obrigatória.',
            'password.current_password' => 'A senha fornecida está incorreta.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
                ->errorBag('userDeletion');
    }
}