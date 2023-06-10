<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory;
    use HasSlug;
    const   CATEGORY_DESIGNER_CREATIVE      = "Creative";
    const   CATEGORY_DESIGNER_FAST          = "Fast"; 
    const   CATEGORY_DESIGNER_EXTUTABLE     = "Extutable"; 
    const   CATEGORY_CONTENT_WRITER_BIG     = "Big";
    const   CATEGORY_CONTENT_WRITER_SMALL   = "Small"; 
    const   CATEGORY_CONTENT_WRITER_MEDIUM  = "Medium"; 
    
    protected $fillable = ['name', 'slug'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
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