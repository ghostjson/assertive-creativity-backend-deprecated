<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\Http\Requests\SendMessage;
use App\Http\Resources\MessageResource;


class ConversationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }


    function send(SendMessage $request){
        return Conversation::create($request->validated());
    }

    function retrieve(){
        return MessageResource::collection(Conversation::mine());
    }
}
