<?php

namespace App\Http\Controllers\Api\Chat;

use App\Actions\Customer\CreateChatRoomAction;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetMessagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(int $user_id): JsonResponse
    {
        $room_id=(new CreateChatRoomAction)($user_id,auth()->id());

        $chat=Message::query()
                    ->where('chat_room_id',$room_id)
                    ->orderBy('created_at', 'asc')
                    ->get();
                    
        return sendSuccessResponse(
            __('messages.get_data'),
            $chat
        );
    }
}

