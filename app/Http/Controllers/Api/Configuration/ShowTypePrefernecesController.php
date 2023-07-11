<?php

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Configuration\StoreTypeIdRequest;
use App\Models\Prefernce;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowTypePrefernecesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(StoreTypeIdRequest $request): JsonResponse
    {
        $typePreferneces =Prefernce::query()
                        ->where('type_id',$request->type_id)
                        ->with('prefernce_values')
                        ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $typePreferneces
        );
    }
}