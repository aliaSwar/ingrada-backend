<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Point extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['point','desginer_id','customer_id','giver_id'];
    /**
     * Get the parent ceatable model (user or customer).
     */
    public function giver()
    {
        return $this->belongsTo(User::class, 'giver_id');
    }
    
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'desginer_id');
    }


} 