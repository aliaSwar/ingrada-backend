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
        if ($request->has('designer_id')) {
            $designer=User::query()
            ->role('designer')
            ->where('id',$request->designer_id)
            ->where('is_active',true)
            ->where('is_deleted',false)
            ->where('category',Category::CATEGORY_CREATIVE)
            ->first();
        }


        
        $attributes=[
            'type'                         =>    Cache::get( $user_id.'type'),
            'designer_id'                  =>    $request->designer_id,
            'is_order_designer'            =>    $request->designer_id ? true:false,
            'size'                         =>    Cache::get( $user_id.'size'),
            'expected_limit_date'          =>    Cache::get( $user_id.'expected_limit_date'),
            'status'                       =>    Order::PENDNING_STATUS,
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
        
        $order=Order::create([
            'type'                         =>    Cache::get( $user_id.'type'),
            'designer_id'                  =>    $request->designer_id,
            'is_order_designer'            =>    $request->designer_id ? true:false,
            'size'                         =>    Cache::get( $user_id.'size'),
            'expected_limit_date'          =>    Cache::get( $user_id.'expected_limit_date'),
            'status'                       =>    Order::PENDNING_STATUS,
            'colors'                       =>    Cache::get( $user_id.'colors'),
            'fonts'                        =>    Cache::get( $user_id.'fonts'), 
            'primary_price'                =>    Cache::get( $user_id.'total_price'), 
            'final_price'                  =>    Cache::get( $user_id.'total_price'),
            'is_enternal'                  =>    false,
            'is_idea'                      =>    Cache::get( $user_id.'is_idea'),
            'description'                  =>    Cache::get( $user_id.'description'),
            'file'                         =>    Cache::get( $user_id.'file'),
            'customers_id'                 =>    $user_id,
            'value'                        =>    Cache::get( $user_id.'value'),
            'pereferce'                    =>    Cache::get( $user_id.'pereferce'),
        ]);
        $order= new Order();
        $order->type=Cache::get( $user_id.'type');
        $order->designer_id=$request->designer_id;
        $order->is_order_designer=$request->designer_id ? true:false;
        $order->size=Cache::get( $user_id.'size');
        $order->expected_limit_date=Cache::get( $user_id.'expected_limit_date');
        $order->status=Order::PENDNING_STATUS;
        $order->colors=json_encode(Cache::get( $user_id.'colors'));
        $order->fonts=json_encode(Cache::get( $user_id.'fonts'));;
        $order->primary_price=Cache::get( $user_id.'total_price');
        $order->final_price=Cache::get( $user_id.'total_price');
        $order->is_enternal=false;
        $order->is_idea=Cache::get( $user_id.'is_idea');
        $order->description=Cache::get( $user_id.'description');
        $order->file=Cache::get( $user_id.'file');
        $order->customers_id=$user_id;
        // $order->value =    json_encode(Cache::get( $user_id.'value'));
        $order->pereferce =    Cache::get( $user_id.'pereferce');    
        $order->save();
        return $order;
    }
}