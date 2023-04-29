<?php

namespace App\Http\Controllers\Manger;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CreateInternalCustomerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $request->validated();
        $data['is_enter'] = true;
        $data = Arr::add($data, 'avatar', uploadFile($request->path, 'users'));
        Customer::create($data);
        return redirect()->route('customers.index')->with(['message'=>__('messages.create_data') ]);
    }
}
//TODO:: resource customer ,internal order