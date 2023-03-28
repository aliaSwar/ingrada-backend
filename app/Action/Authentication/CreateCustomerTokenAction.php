<?php

namespace app\Action\Authentication;

use App\Models\Customer;

class CreateCustomerTokenAction
{
    public function __invoke(Customer $customer)
    {
        $customer['token'] = $customer->createToken('token customer')->plainTextToken;

        return $customer;
    }
}