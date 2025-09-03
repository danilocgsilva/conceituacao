<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersIndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'page' => 'nullable|integer|min:1',
            'query' => 'nullable|string|max:255|min:3|regex:/^[a-zA-Z0-9\s@._-]+$/',
        ];
    }
}