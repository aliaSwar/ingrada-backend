<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\TypeRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class StoreTypeAction
{
    public function __invoke(TypeRequest $request, $order):void
    {
                // Store a piece of data in the session...
        Cache::rememberForever('o', fn()=>
                'fgf'
        );
        $order['type_id'] = $request->type_id;
        $order['type'] = $request->type;
        $order['total_price'] = $request->price;

        Session('type',$order);
    }
}