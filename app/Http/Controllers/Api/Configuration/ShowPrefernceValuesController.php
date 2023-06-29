<?php

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\PrefernceValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowPrefernceValuesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $values=PrefernceValue::query()->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $values
        );
    }
}