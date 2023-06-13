<?php
namespace App\Actions;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Category;
use App\Models\User;
use DateTime;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class DistirbutionAlgorithmAction{
     
     public function __invoke(StoreInternalOrderRequest $request)
     {    
          $users =User::query()
                    ->with('orders')
                    ->role('content writer')
                    ->where('is_deleted',false)
                    //->where('category',$request->category)
                    ->join('order_user', function (JoinClause $join) {
                         $join->on('users.id', '=', 'order_user.user_id')
                              ->where('order_user.is_active', true)
                              ->where('users.is_active', true);
                    })
                    ->select('users.*')
                    ->get();
          return $users;

     }
}