<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\PrefernceRequest;
use Illuminate\Support\Facades\Cache;

class StorePrefernceAction
{
    protected $total_price=0;
    
    public function __invoke(PrefernceRequest $request):void
    {
        Cache::put('pereferce_id',$request->pereferce_id);
        Cache::put('value_ides',$request->value_ides);
        Cache::put('value',$request->value);
        Cache::put('total_price',$request->prices);
        

        foreach ($request->prices_value as $price) {
            $this->total_price=$this->total_price + $price;
        }
        if ($this->total_price>0) {
            
            Cache::put('total_price',$this->total_price);
        }

    }
}