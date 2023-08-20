<?php

declare(strict_types=1);

namespace App\Http\Requests\Manager;

use Illuminate\Foundation\Http\FormRequest;

final class StoreInternalOrderRequest extends FormRequest
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
            'customer_id'       =>     'required|numeric|exists:customers,id',
            'user_id'          =>     'required|numeric|exists:users,id'

        ];
    }



}
