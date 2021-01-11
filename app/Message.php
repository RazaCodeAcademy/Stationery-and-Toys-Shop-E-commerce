<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
    public function sender() {
        return $this->belongsTo(User::class,'sender_id', 'id');
    }
}
