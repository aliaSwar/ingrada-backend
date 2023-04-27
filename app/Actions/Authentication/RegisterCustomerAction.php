<?php

namespace App\Actions\Authentication;

use App\Http\Requests\AuthCustomer\RegisterRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

final class RegisterCustomerAction
{
    public function __invoke(RegisterRequest $request)
    {
        Auth::shouldUse(config('auth.guards.customer'));

        $attributes = $request->only(
            (new Customer())->getFillable()
        );

        if ($request->hasFile('avatar')) {
            $attributes['avatar'] = $request->storePublicly('customer-images');
        }

        $attributes['password'] = defaultHashedPassword($request->password);

        $customer = Customer::create($attributes);

        (new CreateTokenAction)($customer);

        return $customer;
    }
}
