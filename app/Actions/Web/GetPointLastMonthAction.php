<?php

declare(strict_types=1);

namespace App\Actions\Web;

use App\Models\Point;
use Carbon\Carbon;

final class GetPointLastMonthAction
{
    public function __invoke($designer_id)
    {
      $currentDate = Carbon::now();
      $lastMonthStartDate = $currentDate->subMonth()->startOfMonth();
      $lastMonthEndDate = $currentDate->endOfMonth();

      $points = Point::query()
              ->where('desginer_id',$designer_id)
              ->where('giver_id',auth()->id())
              ->whereBetween('created_at', [$lastMonthStartDate, $lastMonthEndDate])
              ->get();
      return $points;
    }
}
