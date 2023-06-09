<?php
namespace App\Actions\Web;

use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Order;

class StoreInternalOrderAction{
     
     public function __invoke(StoreInternalOrderRequest $request)
     {
          $attributes = $request->validated();
          
          if ($request->hasFile('file')) {
               $attributes['file'] = $request->storePublicly('internal-orders');
          }
          $attributes['is_enternal']        = true;
          $attributes['is_accept']          = true;
          $attributes['status']             = Order::INITIATED_STATUS;
          $attributes['primary_price']      = $request->final_price;
          
          Order::create($attributes);
          
     }
}