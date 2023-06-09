<?php

namespace App\Http\Requests\Manager;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreInternalOrderRequest extends FormRequest
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
            'type'              =>    'required|string|exists:types,name',
            'file'              =>    'required|file',
            'limit_date'        =>    'required|date',
            'final_price'       =>    'required|numeric',
            'notes'             =>    'nullable|string',
            'description'       =>    'nullable|string'
        ];
    }



}