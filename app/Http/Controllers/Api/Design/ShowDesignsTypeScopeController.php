<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Item;
use App\Models\Scope;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignsTypeScopeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Type $request,Scope $scope
     * @return JsonResponse
     */
    public function __invoke(Type $type,Color $color)/* : JsonResponse */
    {
        $data=$color->items();
        return $data;
        $designs=Item::query()
                    ->where('is_display_items',true)
                    ->where('type_id',$type->id)
                    ->orderBy('likes', 'desc')
                    ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
}
