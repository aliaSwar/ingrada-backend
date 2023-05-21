<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'status', 'category',
        'start_date', 'end_date', 'real_end_date',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function order(): BelongsTo
    {
        return $this->belongsTo(order::class);
    }
    public function filestask(): HasMany
    {
        return $this->hasMany(FileTask::class);
    }
}
