<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\TypeRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreTypeAction
{
    protected int $user_id;
    public function __invoke(TypeRequest $request):void
    {
        $user_id=Auth::user()->id;
        Cache::put($user_id.'type_id',$request->type_id);
        Cache::put($user_id.'type',$request->type);
        Cache::put($user_id.'total_price',$request->price);

    }
} 