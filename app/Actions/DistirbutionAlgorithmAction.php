<?php
namespace App\Actions;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Category;
use App\Models\User;
use DateTime;
use Illuminate\Contracts\Database\Query\Builder;

class DistirbutionAlgorithmAction{
     
     public function __invoke(StoreInternalOrderRequest $request)
     {
          $users=User::query()
                         ->with('orders')
                         ->role('content writer')
                         ->where('is_active',true)
                         ->where('is_deleted',false)
                         ->where('category',$request->category)
                         ->get();
          foreach ($users as $user) {
               $user->orders()->each(fn($order) =>
                    $order->pivot->is_active
               );
          }


          
     }
}