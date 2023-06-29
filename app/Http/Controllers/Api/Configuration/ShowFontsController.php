<?php

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Font;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowFontsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $fonts=Font::query()->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $fonts
        );
    }
}
