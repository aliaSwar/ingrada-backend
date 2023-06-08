<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\PrefernceRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class   StorePrefernceAction
{
    protected $total_price=0;
    
    public function __invoke(PrefernceRequest $request):void
    {
        $user_id=Auth::user()->id;
        Cache::put($user_id.'pereferce_id',$request->pereferce_id);
        Cache::put($user_id.'value_ides',$request->value_ides);
        Cache::put($user_id.'value',$request->value);
        Cache::put($user_id.'total_price',$request->prices);
        

    if ($request-> has('prices_value')) {
            # code..
        foreach ($request->prices_value as $price) {
            $this->total_price=$this->total_price + $price;
            if ($this->total_price>0) 
                Cache::put($user_id.'total_price',$this->total_price);
        }
    }

    }
}