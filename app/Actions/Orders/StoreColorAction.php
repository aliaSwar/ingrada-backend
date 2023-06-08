<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\ColorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreColorAction
{
    
    public function __invoke(ColorRequest $request):void
    {
        $user_id=Auth::user()->id;
        Cache::put($user_id.'colors',$request->colors);
    }
}