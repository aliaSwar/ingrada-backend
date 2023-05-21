<?php

namespace App\Actions\Orders;

use App\Http\Requests\InformationRequest;

class StoreInformationAction
{
    public function __invoke(InformationRequest $request)
    {
        $order['pereferce_ides']   = $request->pereferce_ides;
        $order['pereferce']        = $request->pereferce;
        
        foreach ($request->prices as $price) {
            $order['total_price']=$order['total_price']+ $price;
        }
        
        return $order;
    }
}