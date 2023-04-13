<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreItemRequest extends FormRequest
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

            'scope_id'           =>      ['required', 'numeric', 'exists:scopes,id'],
            'type_id'            =>      ['required', 'numeric', 'exists:types,id'],
            'prefernce_id'       =>      ['required', 'numeric', 'exists:prefernces,id'],
            'prefernce_value_id' =>      ['nullable', 'numeric', 'exists:prefernce_values,id'],
            'is_enable_post'     =>      ['required', 'numeric'],
            'likes'              =>      ['required', 'numeric'],
            'price'              =>      ['required', 'numeric'],

        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendFailedResponse($validator->errors()->first(), null, 422)
        );
    }
}
