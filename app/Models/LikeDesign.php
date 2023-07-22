<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LikeDesign extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'item_id'];
    
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
