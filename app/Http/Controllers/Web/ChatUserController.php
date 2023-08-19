<?php

namespace App\Http\Controllers\Web;

use App\Actions\Web\NewMessageFromUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\MessageUserRequest;
use Illuminate\Http\JsonResponse;


class ChatUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param MessageUserRequest $request
     * @return JsonResponse
     */
    public function __invoke(MessageUserRequest $request,int $customer_id)
    {
        $message=(new NewMessageFromUserAction)($request, $customer_id);

        return redirect()->back();
    }
}

