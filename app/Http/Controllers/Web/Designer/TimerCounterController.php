<?php

namespace App\Http\Controllers\Web\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TimerCounterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return $request->all();
        return sendSuccessResponse(__('messages.get_data'));
    }
}

