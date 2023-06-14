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



        
        $attributes=[
            'type'                         =>    $request->type,
            'designer_id'                  =>    $request->designer_id,
            'is_order_designer'            =>    $request->designer_id ? true:false,
            'size'                         =>    $request->size,
            'expected_limit_date'          =>    $request->expected_limit_date,
            'status'                       =>    Order::PENDNING_STATUS,
            'colors'                       =>    $request->colors,
            'fonts'                        =>    $request->fonts, 
            'primary_price'                =>    $request->primary_price, 
            'final_price'                  =>    $request->final_price,
            'is_enternal'                  =>    false,
            'is_idea'                      =>    $request->is_idea,
            'file'                         =>    $request->store('order-files','public'),
            'description'                  =>    $request->description,
            'customers_id'                 =>    $user_id,
            'value'                        =>    $request->value,
            'pereferce'                    =>    $request->pereferce,
        ];
        
        $order=Order::create($attributes);

        return $order;
    }
}
