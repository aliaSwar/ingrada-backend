<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\DesignerRequest;
use Illuminate\Support\Facades\Cache;

class StoreDesignerAction
{
    
    public function __invoke(DesignerRequest $request):void
    {
        Cache::put('designer_id',$request->designer_id);
    }
}