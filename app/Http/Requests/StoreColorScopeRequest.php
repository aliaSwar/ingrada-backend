<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreColorScopeRequest extends FormRequest
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
            'color_id'           =>      ['required','numeric', 'exists:colors,id'],
            'scope_id'            =>      ['required','numeric', 'exists:scopes,id'],
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendErrorResponse($validator->errors()->first(), null, 422)
        );
    }
}
