<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class ImageItem extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    public function getImageAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
