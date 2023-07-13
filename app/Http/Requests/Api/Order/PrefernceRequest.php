<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\Order;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

final class PrefernceRequest extends FormRequest
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
            'pereferce_id'             =>   ['required','exists:prefernces,id'],
            'value_ides'               =>   ['array','exists:prefernce_values,id'],
            'value'                    =>   ['array','exists:prefernce_values,name'],
            'pereferce'                =>   ['required','string','exists:prefernces,name'],
            'price'                    =>   ['required'],
            'prices_value'             =>   ['array']
        ];
    }


    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            sendFailedResponse($validator->errors()->first(), null, 422)
        );
    }
}
