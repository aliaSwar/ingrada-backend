<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Scope extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['name', 'slug'];

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
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }
    public function fonts(): BelongsToMany
    {
        return $this->belongsToMany(Font::class);
    }
}
