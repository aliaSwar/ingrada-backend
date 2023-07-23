<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Http\Requests\Api\Chat\StoreMessageCustomerRequest;
use App\Models\ChatRoom;

final class CreateChatRoomAction{
     
     public function __invoke(StoreMessageCustomerRequest $request)
     {
          $chat_room = ChatRoom::updateOrCreate([
               'user_id'     => $request->user_id,
               'customer_id' => auth()->id()
          ]);
          
          return $chat_room->id;
     }
}