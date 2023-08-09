<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['body','file','chat_room_id','is_sender_user'];
    public function chatRoom(){
        return $this->belongsTo(ChatRoom::class);
    }
    public function getPathAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
