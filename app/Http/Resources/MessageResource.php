<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sender' => new UserResource(User::find($this->sender)),
            'receiver' => new UserResource(User::find($this->receiver)),
            'message_content' => $this->message_content,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at,
        ];
    }
}
