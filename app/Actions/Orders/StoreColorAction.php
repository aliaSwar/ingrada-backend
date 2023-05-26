<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\ColorRequest;
use Illuminate\Support\Facades\Cache;

class StoreColorAction
{
    
    public function __invoke(ColorRequest $request):void
    {
        Cache::put('colors',$request->colors);
    }
}