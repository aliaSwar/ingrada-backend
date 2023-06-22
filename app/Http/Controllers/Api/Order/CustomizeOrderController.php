<?php

namespace App\Http\Controllers\Api\Order;

use App\Actions\Orders\StoreColorAction;
use App\Actions\Orders\StoreFontAction;
use App\Actions\Orders\StoreInformationAction;
use App\Actions\Orders\StoreOrderAction;
use App\Actions\Orders\StorePrefernceAction;
use App\Actions\Orders\StoreTypeAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\ColorRequest;
use App\Http\Requests\Api\Order\DesignerRequest;
use App\Http\Requests\Api\Order\FontRequest;
use App\Http\Requests\Api\Order\PrefernceRequest;
use App\Http\Requests\Api\Order\TypeRequest;
use App\Http\Requests\Api\Order\InformationRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Font;
use App\Models\Prefernce;
use App\Models\Scope;
use App\Models\Size;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CustomizeOrderController extends Controller
{
    /**
     * Returns  types for choose to order.
     *
     * @return  JsonResponse
     */
    public function getTypes()/* :JsonResponse */
    {
        return Cache::get(Auth::id().'type');
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
    public function storePrefernces(PrefernceRequest $request):JsonResponse
    {
        (new StorePrefernceAction)($request);
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );
    }
    
    /**
     * Returns  colors for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getSizes():JsonResponse
    {
        
        return sendSuccessResponse(
            __('messages.get_data'),
            Size::query()
                        ->get()
        );
    }
    /**
     * Returns  colors for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getColors():JsonResponse
    {
        
        return sendSuccessResponse(
            __('messages.get_data'),
            Color::query()
                        ->get()
        );
    }
        /**
     * Returns  colors for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getSuggestColors():JsonResponse
    {
        $data=Scope::find(Cache::get(Auth::id().'scope_id'))->colors;
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
    /**
    * Store colors that customer order it
    *
    * @param  ColorRequest  $request
    */
    public function storeColors(ColorRequest $request):JsonResponse
    {
        (new StoreColorAction)($request);
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );
    }
        /**
     * Returns  colors for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getFonts():JsonResponse
    {
        
        return sendSuccessResponse(
            __('messages.get_data'),
            Font::query()
                        ->get()
        );
    }
        /**
     * Returns  Fonts for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getSuggestFonts():JsonResponse
    {
        $data=Scope::find(Cache::get(Auth::id().'scope_id'))->fonts;
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
    /**
    * Store Fonts that customer order it
    *
    * @param  FontRequest  $request
    */
    public function storeFonts(FontRequest $request):JsonResponse
    {
        (new StoreFontAction)($request);
        
        return sendSuccessResponse(
            __('messages.create_data'),
        );
    }
            /**
     * Returns  Fonts for choose to order.
     *
     * @return   JsonResponse  $data
     */
    public function getDesigners():JsonResponse
    {
        $data=User::query()
                    ->role('designer')
                    ->where('is_active',true)
                    ->where('is_deleted',false)
                    ->where('category',Category::CATEGORY_DESIGNER_CREATIVE)
                    ->get();
        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
    /**
    * Store Fonts that customer order it
    *
    * @param  FontRequest  $request
    */
    public function storeOrder(DesignerRequest $request):JsonResponse
    {
        
        $order=(new StoreOrderAction)($request);
        return sendSuccessResponse(
            $order,
            __('messages.create_data'),
            
        );
    }
} 
