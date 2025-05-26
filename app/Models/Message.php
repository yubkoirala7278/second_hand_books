<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['book_id','sender_id','receiver_id','content','is_read'];
}
