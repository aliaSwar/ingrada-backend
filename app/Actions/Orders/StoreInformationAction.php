<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\PrefernceRequest;
use Illuminate\Support\Facades\Cache;

class StoreInformationAction
{
    
    public function __invoke(PrefernceRequest $request):void
    {
        Cache::put('is_idea',$request->is_idea);
        Cache::put('description',$request->description);
        Cache::put('file',uploadFile($request->file,'orders'));
        Cache::put('expected_limit_date',$request->expected_limit_date);


    }
}