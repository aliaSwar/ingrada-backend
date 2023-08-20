<?php

namespace App\Http\Controllers\Api\Chat;

use App\Actions\Customer\CreateChatRoomAction;
use App\Http\Controllers\Controller;
use App\Mail\User;
use App\Models\Message;
use App\Models\Order;
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
    public function __invoke(int $order_id): JsonResponse
    {
        //get designer id or manager id
        $order=Order::find($order_id);
        $order->massenger_id=$order->designer_id ?? User::role('manager')->first()->id;
        $order->save();
        if ( is_null($order->massenger_id)) {
            return sendFailedResponse();
        }
        $room_id=(new CreateChatRoomAction)($order->massenger_id,auth()->id());

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

