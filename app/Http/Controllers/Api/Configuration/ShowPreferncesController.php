<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Prefernce;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ShowPreferncesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $prefernce=Prefernce::query()->get();

        return sendSuccessResponse(
            __('messages.get_data'),
            $prefernce
        );
    }
}
