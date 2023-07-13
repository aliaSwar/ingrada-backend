<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Configuration\StoreScopeIdRequest;
use App\Models\Scope;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ShowSuggestColorsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(StoreScopeIdRequest $request): JsonResponse
    {

        $colors=Scope::findOrFail($request->scope_id)->colors;

        return sendSuccessResponse(
            __('messages.get_data'),
            $colors
        );
    }
}
