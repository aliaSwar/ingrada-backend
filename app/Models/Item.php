<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Item extends Model
{
    use HasFactory;

    protected $fillable = ['scope_id', 'type_id', 'likes', 'price', 'is_enable_post'];

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }

    public function scope(): BelongsTo
    {
        return $this->belongsTo(Scope::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function prefernce(): BelongsTo
    {
        return $this->belongsTo(Prefernce::class);
    }
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function preferncevalue(): BelongsTo
    {
        return $this->belongsTo(Preferncevalue::class);
    }

    public function fonts(): BelongsToMany
    {
        return $this->belongsToMany(Font::class);
    }
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }
    public function imageitems(): HasMany
    {
        return $this->hasMany(ImageItem::class);
    }
}
