<?php

namespace App\Http\Controllers\Api\Authentication;

use App\Actions\Authentication\LogoutAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke():JsonResponse
    {
        (new LogoutAction)();

        return sendSuccessResponse(
            __('auth.success_logout ')
        );
    }
}