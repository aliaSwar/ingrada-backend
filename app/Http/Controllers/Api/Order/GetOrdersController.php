<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Order;

use App\Actions\Orders\StoreOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\OrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class GetOrdersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)/* : JsonResponse */
    {
        $orders=Auth::user()->orders;

        return sendSuccessResponse(
            __('messages.get_data'),
            $orders
        );
    }
}
