<?php

namespace App\Http\Controllers\Api\Authentication;

use app\Action\Authentication\CreateCustomerTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $customer->name              =     $request->name;
        $customer->first_name        =     $request->first_name;
        $customer->last_name         =     $request->last_name;
        $customer->country_id        =     $request->country_id;
        $customer->company           =     $request->company;
        $customer->phone_number      =     $request->phone_number;
        $customer->email             =     $request->email;
        $customer->password          =     Hash::make($request->password);
        $customer->save();
        $customer = (new CreateCustomerTokenAction())($customer);
        return sendSuccessResponse();
    }
}