<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\UploadFileOrderRequest;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UploadFileOrderController extends Controller
{
   /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(UploadFileOrderRequest $request): JsonResponse
    {
        $order=Order::find($request->id);
        $order->file=uploadFile($request->file,'orders');

        $order->save();

        return sendSuccessResponse(
            __('messages.create_data'),
            $order
        );
    }
}

