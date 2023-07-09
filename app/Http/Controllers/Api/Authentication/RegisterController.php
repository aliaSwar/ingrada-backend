<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Authentication;

use App\Actions\Authentication\RegisterCustomerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthCustomer\RegisterRequest;
use App\Http\Resources\AuthenticationResource;
use Illuminate\Http\JsonResponse;

final class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $customer = (new RegisterCustomerAction)($request);

        return sendSuccessResponse(
            __('auth.success_register'), //from lang folder when merge with develop branch
            AuthenticationResource::make($customer)
        );
    }
}
