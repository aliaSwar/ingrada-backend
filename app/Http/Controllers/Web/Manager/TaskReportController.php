<?php

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Task;
use Cache;
use DB;
class TaskReportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return sendSuccessResponse(__('messages.get_data'));
    }

    public function Daily_report()
    {
      $tasks_by_day = Task::byDay()->get();
      foreach ($tasks_by_day  as $task) {
        $delimiter = '-'; // or '-'
        $digits = str_split($task->hours, 2);
        $task->hours = implode($delimiter, $digits);
    }
        return view(
            'manager.reports.daily.orders-report',
            ['tasks_by_day' =>  $tasks_by_day]
        );
    }

    public function Monthly_report()
    {

      $tasks_by_month = Task::byMonth()->get();
      foreach ($tasks_by_month  as $task) {
        $delimiter = '-'; // or '-'
        $digits = str_split($task->hours, 2);
        $task->hours = implode($delimiter, $digits);
    }

        return view(
            'manager.reports.monthly.orders-report',
            ['tasks_by_month'=>$tasks_by_month]
        );
    }

    public function Filterdate(Request $request)
    {
      if ($request->monthly_date) {
        return $request->monthly_date;

        $tasks_by_month = Task::byMonth()
        ->where('start_date',$request->monthly_date)->get();

        return view(
          'manager.reports.monthly.orders-report',
          ['tasks_by_month'=>$tasks_by_month]
      );
    }


    $tasks_by_day = Task::byDay() ->where('start_date',$request->start_date)->get();

    return view(
        'manager.reports.daily.orders-report',
        ['tasks_by_day' =>  $tasks_by_day]
    );

    }


}

