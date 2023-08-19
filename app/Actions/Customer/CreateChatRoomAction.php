<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Models\ChatRoom;

final class CreateChatRoomAction{
     
     public function __invoke(int  $id,int $customer_id )
     {
          $chat_room = ChatRoom::updateOrCreate([
               'user_id'     => $id,
               'customer_id' => $customer_id
          ]);
          
          return $chat_room->id;
     }
}