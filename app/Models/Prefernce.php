<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

final class Prefernce extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['name', 'slug', 'price', 'image', 'type_id'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function prefernce_values(): HasMany
    {
        return $this->hasMany(PrefernceValue::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function getImageAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
