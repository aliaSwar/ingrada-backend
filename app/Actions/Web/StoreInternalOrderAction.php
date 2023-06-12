<?php
namespace App\Actions\Web;

use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Actions\DistirbutionAlgorithmAction;
use App\Models\Order;

class StoreInternalOrderAction{
     
     public function __invoke(StoreInternalOrderRequest $request)
     {
          (new DistirbutionAlgorithmAction)($request);
          
          $attributes = $request->validated();
          
          if ($request->hasFile('file')) {
               $attributes['file'] = $request->file->store('internal-orders','public');
          }
          $attributes['is_enternal']        = true;
          $attributes['is_accept']          = true;
          $attributes['status']             = Order::INITIATED_STATUS;
          $attributes['primary_price']      = $request->final_price;
          
          $order=Order::create($attributes);
          

          
     }
}