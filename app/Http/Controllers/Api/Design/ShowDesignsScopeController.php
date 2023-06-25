<?php

namespace App\Http\Controllers\APi\Design;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Scope;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowDesignsScopeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Scope $scope
     * @return JsonResponse
     */
    public function __invoke(Scope $scope): JsonResponse
    {
        $designs=Item::query()
        ->with('colors','scope','type','fonts')
        ->where('is_enable_post',true)
        ->where('scope_id',$scope->id)
        ->orderBy('likes', 'desc')
        ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $designs
        );
    }
}