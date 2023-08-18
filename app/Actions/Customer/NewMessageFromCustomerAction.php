<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Http\Requests\Api\Chat\StoreMessageCustomerRequest;
use App\Mail\User;
use App\Models\Message;

final class NewMessageFromCustomerAction{
     
     public function __invoke(StoreMessageCustomerRequest $request)
     {       
          $attributes = $request->only(
               (new Message)->getFillable()
          );

          if ($request->hasFile('file')) {
               $attributes['file'] =  uploadFile($request->file,'messages');
          }
          $attributes['chat_room_id']=(new CreateChatRoomAction)($request  );
          
          $new_message=Message::create($attributes);
          
          return  $new_message;
     }
}
