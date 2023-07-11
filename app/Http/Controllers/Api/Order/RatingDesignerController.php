<?php

namespace App\Http\Controllers\Api\Order;

use App\Actions\Customer\RatingDesignerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\StoreRatingDesignerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RatingDesignerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(StoreRatingDesignerRequest $request)/* : JsonResponse */
    {
        $point=(new RatingDesignerAction)($request);
        return $point;
        return sendSuccessResponse(
            $point,
            __('messages.create_data')
        );
    }
}
