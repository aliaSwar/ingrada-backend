<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $data=Item::query()
                    ->with('types','scopes','colors','fonts','prefernces','prefernce_values')
                    ->where('is_display_items',true)
                    ->get();

        return sendSuccessResponse(
            __('messages.get_data'),
        $data
        );
    }
}