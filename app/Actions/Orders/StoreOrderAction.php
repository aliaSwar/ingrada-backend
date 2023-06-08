<?php

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\DesignerRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StoreOrderAction
{
    
    public function __invoke(DesignerRequest $request)
    {
        $user_id=Auth::user()->id;
        $extists=false;
        $designer=User::query()
                    ->role('designer')
                    ->where('id',$request->designer_id)
                    ->where('is_active',true)
                    ->where('is_deleted',false)
                    ->where('category',Category::CATEGORY_CREATIVE)
                    ->first();
                    
        if (!is_null($designer)) {
            $extists=true;
            Cache::put($user_id.'designer_id',$request->designer_id);
        }
        
        
        $attributes=[
            'type'                         =>    Cache::get( $user_id.'type'),
            'designer_id'                  =>    Cache::get( $user_id.'designer_id'),
            'is_order_designer'            =>    $extists,
            'size'                         =>    Cache::get( $user_id.'size'),
            'expected_limit_date'          =>    Cache::get( $user_id.'expected_limit_date'),
            'status'                       =>    Order::ORDERED_STATUS,
            'colors'                       =>    Cache::get( $user_id.'colors'),
            'fonts'                        =>    Cache::get( $user_id.'fonts'), 
            'primary_price'                =>    Cache::get( $user_id.'total_price'), 
            'final_sprice'                 =>    Cache::get( $user_id.'total_price'),
            'is_enternal'                  =>    false,
            'is_idea'                      =>    Cache::get( $user_id.'is_idea'),
            'description'                  =>    Cache::get( $user_id.'description'),
            'file'                         =>    Cache::get( $user_id.'file'),
            'customers_id'                 =>    $user_id,
            'value'                        =>    Cache::get( $user_id.'value'),
            'pereferce'                    =>    Cache::get( $user_id.'pereferce'),
        ];
        
        //$order=Order::create($attributes);
        return $attributes;
    }
}
