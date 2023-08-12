<?php

declare(strict_types=1);

/**
 * Returns a path file and storing .
 *
 * @return string
 */
function uploadFile($file, string $naming)
{
    return null === $file ? null :asset($file->store($naming . '-images', 'public'));
}
