<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    const PENDNING_STATUS    = "Pendning";
    const INITIATED_STATUS  = "Initiated";
    const INPROGRESS_STATUS = "InProgress";
    const COMPLETED_STATUS  = "Completed";
    const FAILED_STATUS     = "Failed";


    protected $fillable = [
        'customers_id', 'item_id', 'description', 'is_idea', 'is_accept', 'type_order', 'primary_price', 'final_price', 'type',
        'scope', 'colors', 'fonts', 'file', 'limit_date', 'status', 'notes',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
    public function getFileAttribute($value)
    {
        return asset("storage/{$value}");
    }
}