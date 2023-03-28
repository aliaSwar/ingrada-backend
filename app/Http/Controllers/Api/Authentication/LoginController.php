<?php

namespace App\Http\Controllers\Api\Authentication;

use app\Action\Authentication\CreateCustomerTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)/* : JsonResponse */
    {
        Auth::shouldUse(config('auth.guards.customer'));


        if (Auth::attempt($request->all())) {
            $customer = Auth::guard('customer')->user();
            $customer = (new CreateTokenAction())($customer);
        }
        return sendSuccessResponse();
    }
}