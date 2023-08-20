<?php

declare(strict_types=1);

namespace App\Actions\Web;
use Illuminate\Support\Facades\DB;
use App\Models\Point;
use Carbon\Carbon;

use App\Http\Requests\Manager\StoreRatingRequest;
use App\Models\User;

final class RatingDesignerAction
{
  //id of max point designer for last month
  public function __invoke(StoreRatingRequest  $request)
  {
        $attributes = $request->only(
          (new Point)->getFillable()
        );
        $attributes['giver_id']=auth()->id();
        $attributes['desginer_id']=$request->designer_id;
        $point=Point::create($attributes);

        //add points or rating to designer
        $user=User::find($request->designer_id);

        $user->update([
          'points'  =>  ($user->points+$request->point)/2
        ]);
        return $point;
  }
}
