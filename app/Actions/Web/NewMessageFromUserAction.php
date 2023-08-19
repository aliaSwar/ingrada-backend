<?php

declare(strict_types=1);

namespace App\Actions\Web;

use App\Actions\Customer\CreateChatRoomAction;
use App\Http\Requests\Web\MessageUserRequest;
use App\Models\Message;

final class NewMessageFromUserAction{
     
     public function __invoke(MessageUserRequest $request,int  $customer_id)
     {       
          $attributes = $request->only(
               (new Message)->getFillable()
          );

          if ($request->hasFile('file')) {
               $attributes['file'] =  uploadFile($request->file,'messages');
          }
          $attributes['chat_room_id']=(new CreateChatRoomAction)(auth()->id(),$customer_id);
          
          $new_message=Message::create($attributes);
          $new_message->is_sender_user=true;
          $new_message->save();

          return  $new_message;
     }
}
