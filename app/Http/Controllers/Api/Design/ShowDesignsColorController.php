<?php

namespace App\Http\Controllers\APi\Design;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignsColorController extends Controller
{
    /**
     * Handle the incoming request. 
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Color $color)/* : JsonResponse */
    {

        $designs=Item::query()
                ->with('colors','scope','type','fonts')
                ->where('is_enable_post',true)
                ->whereHas('colors', 
                fn(Builder $builder) => 
                            $builder->where('id',$color->id)
                )
                ->orderBy('likes', 'desc')
                ->get();
                
        return sendSuccessResponse(
            __('messages.get_data'),
            $designs
        );
    }
}