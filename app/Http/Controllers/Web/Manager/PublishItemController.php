<?php

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
use App\Models\Type;
use App\Models\Scope;
use App\Models\Prefernce;
use App\Models\PrefernceValue;
use App\Models\Size;


class PublishItemController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(int $order_id)
    {
        $order=Order::find($order_id);
        $item=new Item();
        $item->type_id= Type::where('name',$order->type)->first()->id;
        $item->scope_id= Scope::where('name',$order->scope)->first()->id;
        $item->prefernce_id= Prefernce::where('name',$order->pereferce)->first()->id;
        //$item->prefernce_value_id= is_null(PrefernceValue::where('name',$order->value)->first())?'':lPrefernceValue::where('name',$order->value)->first()->id;
        $item->size_id=$order->size_id;
        $item->is_enable_post=true;
        $item->likes=0;
        $item->image=$order->file_designer;
        $item->save();
        $order->item_id=$item->id;
        return redirect()->route('manager.get_completed_orders');
    }
}

