<?php

namespace App\Http\Controllers\Api\Authentication;

use App\Actions\Authentication\CreateTokenAction;
use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AuthCustomer\RegisterRequest;
use App\Http\Resources\AuthenticationResource;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        Auth::shouldUse(config('auth.guards.customer'));

        $customer = new Customer();

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $path = $avatar->store('customer-images', 'public');
            $customer->avatar = $path;
        }
        $customer->name = $request->name;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->country_id = $request->country_id;
        $customer->company = $request->company;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->password = defaultHashedPassword($request->password);
        $customer->save();
        $customer = (new CreateTokenAction())($customer);

        return sendSuccessResponse(
            __('auth.success_register'), //from lang folder when merge with develop branch
            AuthenticationResource::make($customer)
        );
    }
}
