<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Http\Requests\Api\Chat\StoreMessageCustomerRequest;
use App\Models\ChatRoom;

final class CreateChatRoomAction{
     
     public function __invoke(int  $user_id,int $customer_id )
     {
          $chat_room = ChatRoom::updateOrCreate([
               'user_id'     => $user_id,
               'customer_id' => $customer_id
          ]);
          
          return $chat_room->id;
     }
}