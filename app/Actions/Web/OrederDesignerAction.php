<?php

declare(strict_types=1);

namespace App\Actions\Web;
use Illuminate\Support\Facades\DB;
use App\Models\Point;
use Carbon\Carbon;

final class OrederDesignerAction
{
  //id of max point designer for last month
  public function __invoke()
  {
      //order designer point total(all month)
      $designerPoints = Point::query()
          ->select('desginer_id', DB::raw('SUM(point) as total_points'))
          ->groupBy('desginer_id')
          ->get();
          return $designerPoints;

      

  }
}
