<?php

namespace App\Http\Controllers\Api\Order;

use App\Actions\Orders\StoreInformationAction;
use App\Actions\Orders\StorePrefernceAction;
use App\Actions\Orders\StoreTypeAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\PrefernceRequest;
use App\Http\Requests\Api\Order\TypeRequest;
use App\Http\Requests\InformationRequest;
use App\Models\Prefernce;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CustomizeOrderController extends Controller
{

    public function __construct()
    {

    }
    
    /**
     * Returns  types for choose to order.
     *
     * @return  JsonResponse
     */
    public function getTypes():JsonResponse
    {
        return sendSuccessResponse(
            __('messages.get_data'),
            Type::query()->get()
        );
    }
    /**
     * Store Type Design  that customer order it
     *
     * @param  Request  $request
     */
    public function storeTypes(TypeRequest $request):JsonResponse
    {
        (new StoreTypeAction)($request);
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );

    }
    /**
     * Store Type Design  that customer order it
     *
     * @param  Request  $request
     */
    public function storeInformation(InformationRequest $request):JsonResponse
    {
        (new StoreInformationAction)($request);
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );
    }
        /**
     * Returns  types for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getPrefernces():JsonResponse
    {
        
        return sendSuccessResponse(
            __('messages.get_data'),
            Prefernce::query()
                        ->with('prefernce_values')
                        ->where('type_id',Cache::get('type_id')) 
                        ->get()
        );
    }
    /**
    * Store Perernces Type Design  that customer order it
    *
    * @param  Request  $request
    */
    public function storePrefernces(PrefernceRequest $request)/* :JsonResponse */
    {
        (new StorePrefernceAction)($request);
        
        return Cache::get('value');
        return sendSuccessResponse(
            __('messages.create_data'),
        );
    }
} 