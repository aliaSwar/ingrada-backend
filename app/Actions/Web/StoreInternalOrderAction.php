<?php

declare(strict_types=1);

namespace App\Actions\Web;

use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Order;

final class StoreInternalOrderAction
{
    public function __invoke(StoreInternalOrderRequest $request): void
    {

        $attributes = $request->validated();

        if ($request->hasFile('file')) {
            $attributes['file'] = $request->file->store('internal-orders', 'public');
        }
        $attributes['is_enternal']        = true;
        $attributes['is_accept']          = true;
        $attributes['status']             = Order::INITIATED_STATUS;
        $attributes['primary_price']      = $request->final_price;

        $order=Order::create($attributes);
        $order->is_enternal=true;
        $order->save();
        $order->users()->attach($request->user_id);


    }
}
