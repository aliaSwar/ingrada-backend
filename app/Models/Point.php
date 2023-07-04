<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

final class Point extends Model
{
    use HasFactory;

    /**
     * Get the parent ceatable model (user or customer).
     */
    public function creatable(): MorphTo
    {
        return $this->morphTo();
    }

    public function historypoint(): HasOne
    {
        return $this->hasOne(HistoryPoint::class);
    }
}
