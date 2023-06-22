<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDesignsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
        public function __invoke(): JsonResponse
        {
            $data=Item::query()
                        ->with('type','scope','colors')
                        ->where('is_display_items',true)
                        ->orderBy('likes', 'desc')
                        ->get();

            return sendSuccessResponse(
                __('messages.get_data'),
            $data
            );
        }
}