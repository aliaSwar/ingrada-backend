<?php

namespace App\Http\Requests\AuthUser;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules;

class RegisteredUserRequest extends FormRequest
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
            'username' => ['required', 'unique:users,username', 'max:255', 'regex:/\w*$/', 'string'],
            'fullname' => ['required', 'string', 'max:255'],
            'number_tasks' => ['nullable', 'numeric'],
            'category_id' => ['nullable', 'numeric', 'exists:tablecategories,id'],
            'path' => ['nullable', 'file', 'image', 'mimes:png,jpg,jpeg,gif,bmp,ico'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendFailedResponse($validator->errors()->first(), null, 422)
        );
    }
}
