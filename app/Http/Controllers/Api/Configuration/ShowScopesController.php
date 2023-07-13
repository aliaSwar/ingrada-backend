<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Scope;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ShowScopesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $scopes=Scope::query()->get();

        return sendSuccessResponse(
            __('messages.get_data'),
            $scopes
        );
    }
}
