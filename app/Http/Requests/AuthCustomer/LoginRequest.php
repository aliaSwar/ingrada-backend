<?php

declare(strict_types=1);

namespace App\Http\Requests\AuthCustomer;

use Illuminate\Foundation\Http\FormRequest;

final class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'         =>     ['required',  'string'],
            'password'     =>     ['required', 'string'],
        ];
    }
}
