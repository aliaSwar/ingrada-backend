<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\PrefernceValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowValuesPreferneceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $data = PrefernceValue::query()
                ->where('prefernce_id',$request->prefernce_id)
                ->get();

        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
}