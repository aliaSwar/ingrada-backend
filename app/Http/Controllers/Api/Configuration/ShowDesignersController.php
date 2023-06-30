<?php

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)/* : JsonResponse */
    {
        $data=User::query()
                    ->role('designer')
                    ->where('is_active',true)
                    ->where('is_deleted',false)
                    ->where('category','=',Category::CATEGORY_DESIGNER_CREATIVE)
                    ->get();
                    
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
}
