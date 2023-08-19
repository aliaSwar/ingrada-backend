<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\UploadFileImageRequest;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UploadImageOrderController extends Controller
{
   /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(UploadFileImageRequest $request): JsonResponse
    {
        $order=Order::find($request->id);
        $order->image=uploadFile($request->image,'orders');

        $order->save();

        return sendSuccessResponse(
            __('messages.update_data'),
            $order
        );
    }
}
