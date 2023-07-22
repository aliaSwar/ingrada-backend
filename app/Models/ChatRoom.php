<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChatRoom extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','sender_id'];
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function messages():HasMany
    {
        return $this->hasMany(Message::class);
    }
}
