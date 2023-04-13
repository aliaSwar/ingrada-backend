<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePrefernceRequest extends FormRequest
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
            'image'                    => ['required','file', 'image'],
            'name'                     => ['string','unique:types,name'],
            'price'                    => ['required','numeric'],
            'type_id'            =>      ['required','numeric', 'exists:types,id'],

        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendErrorResponse($validator->errors()->first(), null, 422)
        );
    }
}