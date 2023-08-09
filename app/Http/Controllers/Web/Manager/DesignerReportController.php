<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Task;
use Cache;
use DB;

class DesignerReportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
      return view('manager.reports.designer', ['users' => User::with('categories')->where('category_id', '!=', 'null')->paginate(7)]);

    }
    public function Daily_report($id)
    {
     // return $id;
            $tasks_by_day = Task::byDay()
      ->where('user_id', $id)
      ->get();

        return view(
            'manager.reports.daily.designers-report',
            ['tasks_by_day' =>  $tasks_by_day,'user_id'=>$id]
        );
    }

    public function Monthly_report( $id)
    {


      $tasks_by_month = Task::byMonth()->where('user_id', $id)->get();

        return view(
            'manager.reports.monthly.designers-report',
            ['tasks_by_month'=>$tasks_by_month,'user_id'=>$id]
        );
    }

    public function Show_task($task_ids)
    {

     $taskIdsArray = explode(',', $task_ids);
     $tasks = Task::whereIn('id', $taskIdsArray)->get();
   //  return $tasks;

    return view(
      'designer.task.index',
      ['tasks'=>$tasks]
  );

    }

    public function Filterdate(Request $request,$id)
    {
      if ($request->monthly_date) {
       // return $request->monthly_date;
        $monthYear = date('Y-m', strtotime($request->monthly_date));
        //return $monthYear;
        $tasks_by_month = Task::byMonth()->whereMonth('start_date', $monthYear)
        ->where('user_id', $id)
        ->get();

        return view(
            'manager.reports.monthly.designers-report',
            ['tasks_by_month'=>$tasks_by_month,'user_id'=>$id]
        );
    }

      $tasks_by_day = Task::byDay()
      ->where('start_date',$request->start_date)
      ->where('user_id', $id)
      ->get();

        return view(
            'manager.reports.daily.designers-report',
            ['tasks_by_day' =>  $tasks_by_day,'user_id'=>$id]
        );

    }

}

