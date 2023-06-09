<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\InformationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreInformationAction
{
    
    public function __invoke(InformationRequest $request):void
    {
        $user_id=Auth::user()->id;
        Cache::put($user_id.'is_idea',$request->is_idea);
        Cache::put($user_id.'description',$request->description);
        //Cache::put($user_id.'file',uploadFile($request->file,'orders'));
        Cache::put($user_id.'expected_limit_date',$request->expected_limit_date);
        Cache::put($user_id.'size',$request->size);
        Cache::put($user_id.'scope',$request->scope);
        Cache::put($user_id.'scope_id',$request->scope_id);

    }
}
