<?php

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Actions\Web\GetPointLastMonthAction;
use App\Models\Point;
use App\Models\User;

class RatingDesignerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $user=User::find($request->designer_id);
        $points=(new GetPointLastMonthAction)($request->designer_id);
        if (!$points->isEmpty()) {
              return sendFailedResponse('error');
        }
        $attributes = $request->only(
          (new Point())->getFillable()
        );
        $attributes['giver_id']=auth()->id();
        $attributes['desginer_id']=$user->id;
        $point=Point::create($attributes);

        //add points or rating to designer
        $user->update([
          'points'  =>  ($user->points+$request->point)/2
        ]);
        return sendSuccessResponse(__('messages.get_data'));
    }
}

