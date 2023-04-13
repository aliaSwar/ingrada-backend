<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PrefernceValue extends Model
{
    use HasFactory, HasSlug;

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
    public function prefernce(): BelongsTo
    {
        return $this->belongsTo(Prefernce::class);
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
