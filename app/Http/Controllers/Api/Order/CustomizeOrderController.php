<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Order;

use App\Actions\Orders\StoreOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\OrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class CustomizeOrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(OrderRequest $request): JsonResponse
    {
        $order=(new StoreOrderAction)($request);

        return sendSuccessResponse(
            __('messages.get_data'),
            $order
        );
    }
}
