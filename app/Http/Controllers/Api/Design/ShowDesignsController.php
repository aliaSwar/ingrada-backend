<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
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
            $data=DB::table('items')->query()
                        ->with('types','scopes','colors','fonts','prefernces','prefernce_values')
                        ->where('is_display_items',true)
                        ->orderBy('likes', 'desc')
                        ->get();

            return sendSuccessResponse(
                __('messages.get_data'),
            $data
            );
        }
}