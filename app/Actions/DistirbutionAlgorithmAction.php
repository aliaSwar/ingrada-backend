<?php
namespace App\Actions;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Category;
use App\Models\User;
use DateTime;

class DistirbutionAlgorithmAction{
     
     public function __invoke(StoreInternalOrderRequest $request)
     {
          $fdate = $request->start_date;
          $tdate = $request->end_date;
          $datetime1 = new DateTime($fdate);
          $datetime2 = new DateTime($tdate);
          $interval = $datetime1->diff($datetime2);
          $days = $interval->format('%a');
          dd($days);
          $users=User::query()
                         ->role('content writer')
                         ->where('is_active',true)
                         ->where('is_deleted',false)
                         ->where('category',$request->category)
                         ->first();

          
     }
}
