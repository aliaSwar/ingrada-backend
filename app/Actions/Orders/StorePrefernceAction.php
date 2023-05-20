<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\PrefernceRequest;
use Illuminate\Support\Arr;

class StorePrefernceAction
{
    public function __invoke(PrefernceRequest $request,Arr $order)
    {
        $order['pereferce_ides']   = $request->pereferce_ides;
        $order['pereferce']        = $request->pereferce;
        
        foreach ($request->prices as $price) {
            $order['total_price']=$order['total_price']+ $price;
        }
        
        return $order;
    }
}