<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Day extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
