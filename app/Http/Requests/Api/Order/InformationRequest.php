<?php

namespace App\Http\Requests\Api\Order;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class InformationRequest extends FormRequest
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
            'is_idea'                               =>  ['required','boolean'],
            'description'                           =>  ['nullable','string'],
            'scope'                                 =>  ['required','string','exists:scopes,name'],
            'scope_id'                              =>  ['required','numeric','exists:scopes,id'],
            'file'                                  =>  ['file'],
            'size'                                  =>  ['nullable','numeric'],
            'expected_limit_date'                   =>  ['required','date'],
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendFailedResponse($validator->errors()->first(), null, 422)
        );
    }
}