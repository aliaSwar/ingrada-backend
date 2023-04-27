<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Hash;

/**
 * Returns a hash Password string.
 *
 * @param string|null $password
 * @return string
 */
function defaultHashedPassword(string|null $password = 'super  admin'): string
{
    return Hash::make($password);
}
