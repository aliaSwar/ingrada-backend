<?php

namespace App\Permission;

trait HasDefaultPermission
{
    protected function permissions(): array
    {
        return [
            'employe_create',
            'show_point'
        ];
    }
}
