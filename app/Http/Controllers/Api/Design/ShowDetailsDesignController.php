<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\JsonResponse;


class ShowDetailsDesignController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Int $id
     * @return JsonResponse
     */
    public function __invoke(int $id): JsonResponse
    {
        $design=Item::query()
                    ->with('colors','scope','type','prefernce','preferncevalue','fonts','ImageItems')
                    ->where('id',$id)
                    ->first();
        return sendSuccessResponse(
            __('messages.get_data'),
            $design
        );
    }
}