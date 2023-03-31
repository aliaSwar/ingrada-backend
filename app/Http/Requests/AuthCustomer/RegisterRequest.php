<?php

namespace App\Http\Requests\AuthCustomer;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'                  =>     ['required', 'unique:customers,name', 'max:255', 'regex:/\w*$/', 'string'],
            'first_name'            =>     ['required', 'string', 'max:255'],
            'last_name'             =>     ['required', 'string', 'max:255'],
            'avatar'                =>     ['nullable', 'file', 'image', 'mimes:png,jpg,jpeg,gif'],
            'country_id'            =>     ['numeric', 'exists:countries,id', 'required'],
            'company'               =>     ['required', 'string', 'max:255'],
            'phone_number'          =>     ['required', 'string', new PhoneNumber()],
            'email'                 =>     ['required', 'unique:customers,email', 'email'],
            'password'              =>     ['required', 'min:8', 'string']
        ];
    }
}
