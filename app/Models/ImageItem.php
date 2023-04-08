<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageItem extends Model
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
