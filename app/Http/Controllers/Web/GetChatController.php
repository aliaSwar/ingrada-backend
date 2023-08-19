<?php

namespace App\Http\Controllers\Web;

use App\Actions\Customer\CreateChatRoomAction;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GetChatController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param int $customer_id
     * @return JsonResponse
     */
    public function __invoke(int $customer_id ): View
    {
        $room_id=(new CreateChatRoomAction)(auth()->id(),$customer_id);

        $chat=Message::query()
                    ->where('chat_room_id',$room_id)
                    ->orderBy('created_at', 'asc')
                    ->get();
                    
        return view('chat',
        ['messages'  =>  $chat   ,'customer'  => Customer::find($customer_id) ]
    );
    }
}

