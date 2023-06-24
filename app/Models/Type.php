<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Type extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['name', 'slug', 'price', 'image','proprtiesnumber','proprties_current'];

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

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function prefernces(): HasMany
    {
        return $this->hasMany(Prefernce::class);
    }

    public function getImageAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
