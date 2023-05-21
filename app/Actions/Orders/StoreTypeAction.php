<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\TypeRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;

class StoreTypeAction
{
    public function __invoke(TypeRequest $request, $order):void
    {
        $order['type_id'] = $request->type_id;
        $order['type'] = $request->type;
        $order['total_price'] = $request->price;

        Session('type',$order);
    }
}