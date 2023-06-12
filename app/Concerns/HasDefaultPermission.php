<?php

namespace App\Concerns;

trait HasDefaultPermission
{
    protected function permissions(): array
    {
        return [
              'admin',
              'designer',
              'content writer',
              'manager',
        ];
    }
}
