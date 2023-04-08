<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Day extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
