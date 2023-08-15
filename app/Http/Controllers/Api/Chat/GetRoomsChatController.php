<?php

namespace App\Http\Controllers\Api\Chat;

use App\Http\Controllers\Controller;
use App\Models\ChatRoom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetRoomsChatController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {

        return sendSuccessResponse(
            __('messages.get_data'),
            ChatRoom::query()
                            ->with('user')
                            ->get()
        );
    }
}

