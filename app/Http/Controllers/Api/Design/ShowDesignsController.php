<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Design;

use App\Actions\Designs\GetFilterDesignAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\FilterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ShowDesignsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(FilterRequest $request): JsonResponse
    {

        $design=(new GetFilterDesignAction)($request);

        return sendSuccessResponse(
            __('messages.get_data'),
            $design
        );
    }
}
