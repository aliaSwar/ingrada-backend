<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\TypeRequest;
use Illuminate\Support\Arr;

class StoreTypeAction
{
    public function __invoke(TypeRequest $request, $order)
    {
        $order['type_id'] = $request->type_id;
        $order['type'] = $request->type;
        $order['total_price'] = $request->price;

        return $order;
    }
}