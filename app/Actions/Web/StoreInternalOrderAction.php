<?php

declare(strict_types=1);

namespace App\Actions\Web;

use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Order;

final class StoreInternalOrderAction
{
    public function __invoke(StoreInternalOrderRequest $request)
    {

        $attributes = $request->validated();
        if ($request->hasFile('file')) {
            $attributes['file'] = uploadFile($request->file,'internal-orders');
        }
        $attributes['is_enternal']        = true;
        $attributes['is_accept']          = true;
        $attributes['status']             = Order::INITIATED_STATUS;
        $attributes['primary_price']      = $request->final_price;

        $order= new Order($attributes);
        $order->customer_id= $request->customer_id;
        $order->is_enternal=true;

        $order->save();
        $order->users()->attach($request->user_id);


    }
}
