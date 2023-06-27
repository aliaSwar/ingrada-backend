<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignsTypeColorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Type $type,Color $color)/* : JsonResponse */
    {
        //return $color;
        $designs=Item::query()
                    ->with('colors','scope','type','fonts')
                    ->where('is_enable_post',true)
                    ->where('type_id',$type->id)
                    ->whereHas('colors ', fn(Builder $builder) => 
                        $builder->where('id','=',$color->id)
                    )
                    ->orderBy('likes', 'desc')
                    ->get();
        return sendSuccessResponse(__('messages.get_data'));
    }
}