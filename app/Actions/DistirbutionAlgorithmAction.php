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
          // $users =User::query()
          //           ->with('orders')
          //           ->role('content writer')
          //           ->where('is_deleted',false)
          //           //->where('category',$request->category)
          //           ->join('order_user', function (JoinClause $join) {
          //                $join->on('users.id', '=', 'order_user.user_id')
          //                     ->where('order_user.is_active', true)
          //                     ->where('users.is_active', true);
          //                     //->where('users.is_active', true);
          //           })
          //           ->select('users.*')
          //           ->get();
          //dd($request->category);
          $users =User::query()
                     ->with('tasks')
                     ->role('content writer')
                     ->where('is_deleted',false)
                     ->where('category',$request->category)
                     ->where('is_active',true)

                     ->get();


                foreach ($users as $user) {
                  $count=0;
                  foreach ($user->tasks  as $task) {
                      if ($task->status=='Progress' and $task->start_date<=$request->start_date and $task->end_date>=$request->start_date) {
                        $count++;
                      }


                  }

                }


                dd($users);


     }
}
