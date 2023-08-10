<?php

declare(strict_types=1);

namespace App\Actions\Web;

use App\Models\Point;
use Carbon\Carbon;

final class GetPointLastMonthTotalAction
{
    public function __invoke($designer_id)
    {


      $average_points = Point::query()
              ->where('desginer_id',$designer_id)
              ->whereMonth('created_at', Carbon::now()->month)
              ->average('point');
      return $average_points;
    }
}
