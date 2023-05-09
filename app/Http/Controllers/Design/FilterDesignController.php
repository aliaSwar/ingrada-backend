<?php

namespace App\Http\Controllers\Design;

use App\Http\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FilterDesignController extends Controller
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

