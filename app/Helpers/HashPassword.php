<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Hash;

/**
 * Returns a success HTTP JSON response.
 *
 * @param string|null $password
 * @return string
 */
function defaultHashedPassword(string|null  $password = 'admin@admin.app')
{
    $hashed_password = Hash::make($password);

    return $hashed_password;
}
