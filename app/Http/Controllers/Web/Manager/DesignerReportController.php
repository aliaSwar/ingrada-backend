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
use App\Actions\Web\GetPointLastMonthAction;
use App\Actions\Web\GetPointLastMonthTotalAction;




class DesignerReportController extends Controller
{

    public function __invoke()
    {

    }
    public function getDailyDesigner(Request $request)
    {
      return view('manager.reports.daily.designer', ['users' => User::role('designer')->with('categories')->where('category_id', '!=', 'null')->paginate(7)]);

    }
    //get designer for monthly report
    public function Get_designer(Request $request)
    {
      return view('manager.reports.monthly.designer', ['users' => User::role('designer')->with('categories')->where('category_id', '!=', 'null')->paginate(7)]);

    }

    public function Daily_report($id)
    {
     // return $id;
            $tasks_by_day = Task::byDay()
      ->where('user_id', $id)
      ->get();

      foreach ($tasks_by_day  as $task) {
        $delimiter = ','; // or '-'
        $digits = str_split($task->hours, 2);
        $task->hours = implode($delimiter, $digits);

    }
        return view(
            'manager.reports.daily.designers-report',
            ['tasks_by_day' =>  $tasks_by_day,'user_id'=>$id]
        );
    }

    public function Monthly_report( $id)
    {
      $is_show_rating=false;
      $points=(new GetPointLastMonthAction)($id);
      if (!$points->isEmpty()) {
           $is_show_rating=true;
      }
      $average_points=(new GetPointLastMonthTotalAction)($id);
      $tasks_by_month = Task::byMonth()->where('user_id', $id)->get();

      foreach ($tasks_by_month  as $task) {
        $delimiter = '-'; // or '-'
        $digits = str_split($task->hours, 2);
        $task->hours = implode($delimiter, $digits);
    }

        return view(
            'manager.reports.monthly.designers-report',
            [
              'tasks_by_month'=>$tasks_by_month,
              'user_id'=>$id,
              'is_show_rating'=>$is_show_rating,
              'average_points'=> $average_points
            ]
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

    function formatNumberWithDelimiter($number, $delimiter)
{
    $digits = str_split($number, 2);
    return implode($delimiter, $digits);
}

}

