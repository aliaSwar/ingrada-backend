<?php

namespace App\Http\Controllers\Api\Authentication;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):JsonResponse
    {
        // Auth::shouldUse(config('auth.customer_guard_name'));
        $request->user()->tokens()->delete();

        return sendSuccessResponse(
            __('auth.success_logout ')
        );
    }
}