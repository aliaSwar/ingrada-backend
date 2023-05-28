<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\DesignerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreOrderAction
{
    
    public function __invoke(DesignerRequest $request)
    {
        $user_id=Auth::guard('customers')->id;
        Cache::put($user_id.'designer_id',$request->designer_id);
        
        $attributes=[
            'type'     =>    Cache::get( $user_id.'type')
        ];

    }
}