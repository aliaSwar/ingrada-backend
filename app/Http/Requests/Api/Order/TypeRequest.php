<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\Order;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

final class TypeRequest extends FormRequest
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
            'type'     =>   ['required','string','exists:types,name'],
            'type_id'  =>   ['required','exists:types,id'],
            'price'    =>   ['required']
        ];
    }


    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            sendFailedResponse($validator->errors()->first(), null, 422)
        );
    }
}
