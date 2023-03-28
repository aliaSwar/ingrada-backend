<?php

namespace App\Actions\Authentication;

use App\Models\Customer;

class CreateTokenAction
{
    public function __invoke(Customer $customer)
    {
        $customer['token'] = $customer->createToken('customer auth')->plainTextToken;
        return $customer;
    }
}