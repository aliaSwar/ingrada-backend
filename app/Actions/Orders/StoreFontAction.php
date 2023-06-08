<?php

namespace App\Actions\Orders;


use App\Http\Requests\Api\Order\FontRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreFontAction
{
    
    public function __invoke(FontRequest $request):void
    {
        Cache::put(Auth::user()->id.'fonts',$request->fonts);
    }
}