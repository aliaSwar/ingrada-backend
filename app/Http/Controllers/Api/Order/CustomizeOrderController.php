<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomizeOrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return sendSuccessResponse(__('messages.get_data'));
    }
}

