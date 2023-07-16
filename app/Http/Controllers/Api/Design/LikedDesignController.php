<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Design;

use App\Actions\Designs\AddLikeToDesignAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Design\StoreLikedDesignRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LikedDesignController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(StoreLikedDesignRequest $request)
    {

        (new AddLikeToDesignAction)($request);    
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );  
    }
}