<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignsTypeController extends Controller
{
    /**
     * Handle the incoming desgins.
     *
     * @param Type $type
     * @return JsonResponse
     */
    public function __invoke(Type $type): JsonResponse
    {

        $data=Item::query()
        ->with('colors','fonts','scope')
        ->where('type_id',$type->id)
        ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
}