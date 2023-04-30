<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Country;

class GetCountryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): JsonResponse
    {
        return sendSuccessResponse(
        
            __('messages.get_data'),
            Country::all()
        );
    }
}
