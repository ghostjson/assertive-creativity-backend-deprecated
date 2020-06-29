<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = ['sender', 'receiver', 'message_content'];
}
