<?php

namespace App\Http\Controllers\Api\Chat;

use App\Actions\Customer\CreateChatRoomAction;
use App\Actions\Customer\NewMessageFromCustomerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Chat\StoreMessageCustomerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatCustomerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param StoreMessageCustomerRequest $request
     * @return JsonResponse
     */
    public function __invoke(StoreMessageCustomerRequest $request): JsonResponse
    {
        $message=(new NewMessageFromCustomerAction)($request);
        return sendSuccessResponse(
            __('messages.create_data'),
            $message
        );
    }
}