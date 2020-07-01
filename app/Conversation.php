<?php

namespace App;

use App\Http\Resources\MessageResource;
use http\Message;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = ['sender', 'receiver', 'message_content'];

    public static function mine(){
        $user_id = auth()->user()->id;

        return Conversation::where('receiver', '=', $user_id)
            ->orWhere('sender' ,'=', $user_id)
            ->latest()->get();
    }
}
