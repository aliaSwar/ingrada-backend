<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Authentication;

use App\Actions\Authentication\CreateTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthCustomer\LoginRequest;
use App\Http\Resources\AuthenticationResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

final class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest  $request)/* : JsonResponse */
    {
        Auth::shouldUse(config('auth.customer_guard_name'));

        if (Auth::attempt($request->validated())) {
            $customer = Auth::user();

            $customer = (new CreateTokenAction)($customer);

            return sendSuccessResponse(
                __('auth.success_login'),
                AuthenticationResource::make($customer)
            );
        }

        return sendFailedResponse(
            __('auth.failed'),
            null,
            401
        );
    }
}
