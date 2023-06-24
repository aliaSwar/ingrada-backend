<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['length','wedth'];

    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
}