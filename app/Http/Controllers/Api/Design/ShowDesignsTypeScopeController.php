<?php

namespace App\Http\Controllers\Api\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Scope;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;


class ShowDesignsTypeScopeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Type $request,Scope $scope
     * @return JsonResponse
     */
    public function __invoke(Type $type,Scope $scope): JsonResponse
    {

        $designs=Item::query()
                    ->with('colors','scope','type','fonts')
                    ->where('is_enable_post',true)
                    ->where('type_id',$type->id)
                    ->where('scope_id',$scope->id)
                    ->orderBy('likes', 'desc')
                    ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $designs
        );
    }
}