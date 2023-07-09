<?php

declare(strict_types=1);

namespace App\Actions\Orders;

use App\Http\Requests\Api\Order\OrderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

final class StoreOrderAction
{
    public function __invoke(OrderRequest $request)
    {
        $user_id=Auth::user()->id;


        $attributes=[
            'type'                         =>    $request->type,
            'title'                        =>    $request->title,
            'designer_id'                  =>    $request->designer_id,
            'is_order_designer'            =>    $request->designer_id ? true : false,
            'size_id'                      =>    $request->size_id,
            'expected_limit_date'          =>    $request->expected_limit_date,
            'limit_date'                   =>    $request->expected_limit_date,
            'status'                       =>    Order::PENDNING_STATUS,
            'colors'                       =>    json_encode($request->colors, true),
            'fonts'                        =>    json_encode($request->fonts, true),
            'primary_price'                =>    $request->primary_price,
            'final_price'                  =>    $request->primary_price,
            'is_enternal'                  =>    false,
            'is_idea'                      =>    $request->is_idea,
            'is_visual_identity'           =>    $request->is_visual_identity,
            'file'                         =>    uploadFile($request->file, 'orders'),
            'image'                        =>    uploadFile($request->image, 'orders'),
            'description'                  =>    $request->description,
            'customers_id'                 =>    $user_id,
            'value'                        =>    json_encode($request->value, true),
            'pereferce'                    =>    $request->pereferce,
        ];
        $order=Order::create($attributes);


        return $order;
    }
}
