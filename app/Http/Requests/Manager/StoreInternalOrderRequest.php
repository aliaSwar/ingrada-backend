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
            'description'       =>    'nullable|string',
            // 'start_date'        =>    'required|date|before_or_equal:end_date',
            // 'end_date'          =>    'required|date|after_or_equal:start_date',
            'category'          =>    'required|string',
            'prority'           =>    'required|string',
            'customers_id'     =>    'required|numeric'



        ];
    }



}
