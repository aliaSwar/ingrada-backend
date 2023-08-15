<?php

namespace App\Http\Controllers\Api\Chat;

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
    public function __invoke(int $room_id): JsonResponse
    {
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

