<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class FileTask extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function getPathAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
