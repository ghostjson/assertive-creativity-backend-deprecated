<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\Http\Requests\SendMessage;

class ConversationController extends Controller
{
    function send(SendMessage $request){
        return Conversation::create($request->validated());
    }
}
