<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\InformationRequest;
use Illuminate\Support\Facades\Cache;

class StoreInformationAction
{
    
    public function __invoke(InformationRequest $request):void
    {
        Cache::put('is_idea',$request->is_idea);
        Cache::put('description',$request->description);
        Cache::put('is_idea',$request->is_idea);
        Cache::put('description',$request->description);
        Cache::put('file',uploadFile($request->file,'orders'));
        Cache::put('expected_limit_date',$request->expected_limit_date);
        Cache::put('size',$request->size);
        Cache::put('scope',$request->scope);
        Cache::put('scope_id',$request->scope_id);

    }
}