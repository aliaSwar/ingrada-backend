<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Hash;

/**
 * Returns a path file and storing .
 *
 * @param  $file
 * @return string
 */
function uploadFile($file = null, string $naming)
{
    return is_null($file) ? null : $file->store($naming . '-images', 'public');
}
