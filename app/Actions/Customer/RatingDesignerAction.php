<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Http\Requests\Api\Order\StoreRatingDesignerRequest;
use App\Models\Point;
use App\Models\Order;
use App\Models\User;

final class RatingDesignerAction{

     public function __invoke(StoreRatingDesignerRequest $request)
     {
          $order=Order::where('id',$request->order_id)->first();
          //add point
          $attributes = $request->only(
               (new Point)->getFillable()
          );
          $attributes['customer_id']=auth()->id();
          $attributes['desginer_id']=$order->designer_id;
          $point=Point::create($attributes);
          //add points or rating to order
          $order->points=$request->point;
          $order->save();
          //add points or rating to designer
          $user=User::query()->where('id',$order->designer_id)->first();

          $user->update([
            'points'  =>  ($user->points+$request->point)/2
          ]);
          return $point;
     }
}
