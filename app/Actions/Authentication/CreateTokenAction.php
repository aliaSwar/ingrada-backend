<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use App\Models\Customer;

final class CreateTokenAction
{
    public function __invoke(Customer $customer)
    {
        $customer['token'] = $customer->createToken('customer auth')->plainTextToken;

        return $customer;
    }
}
