<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\TypeRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class StoreTypeAction
{
    public function __invoke(TypeRequest $request):void
    {

        Cache::put('type_id',$request->type_id);
        Cache::put('type',$request->type);
        Cache::put('total_price',$request->price);
    }
} 