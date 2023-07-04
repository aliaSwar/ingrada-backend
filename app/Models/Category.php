<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

final class Category extends Model
{
    use HasFactory;
    use HasSlug;
    public const   CATEGORY_DESIGNER_CREATIVE      = "Creative";
    public const   CATEGORY_DESIGNER_FAST          = "Fast";
    public const   CATEGORY_DESIGNER_EXTUTABLE     = "Extutable";
    public const   CATEGORY_CONTENT_WRITER_BIG     = "Big";
    public const   CATEGORY_CONTENT_WRITER_SMALL   = "Small";
    public const   CATEGORY_CONTENT_WRITER_MEDIUM  = "Medium";

    protected $fillable = ['name', 'slug'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'category_id', 'id');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
