<?php

namespace App\Http\Controllers\Api\Authentication;

use App\Actions\Authentication\CreateTokenAction;
use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AuthCustomer\LoginRequest;
use App\Http\Resources\AuthenticationResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {

        Auth::shouldUse(config('auth.customer_guard_name'));

        if (Auth::attempt($request->validated())) {
            $customer = $request->user();
            $customer = (new CreateTokenAction())($customer);

            return sendSuccessResponse(
                __('auth.success_login'),
                AuthenticationResource::make($customer)
            );
        }
    }
}
