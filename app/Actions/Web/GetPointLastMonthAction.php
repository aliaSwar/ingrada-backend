<?php

declare(strict_types=1);

namespace App\Actions\Web;
use Illuminate\Support\Facades\DB;
use App\Models\Point;
use Carbon\Carbon;

final class GetPointLastMonthAction
{

    public function __invoke()
    {

        $date = \Carbon\Carbon::now();
        $lastMonth =  $date->subMonth()->format('m'); // 11
      // return now()->format('d-m-Y');
        $designerIdWithMaxPoints = Point::query()
        ->select('desginer_id', DB::raw('SUM(point) as total_points'))
        ->whereMonth('created_at', $lastMonth)
        ->groupBy('desginer_id')
        ->orderByDesc('total_points')
        ->get();
          return $designerIdWithMaxPoints;

    }
}

