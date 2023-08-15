<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\ContentWriter;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class ExternalOrderContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user=Auth::user();
        $orders=$user->orders()->paginate(15);
        //dd($orders);
        return view('content-writer.orders.index',['orders'=>$orders]);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order=Order::findOrFail($id);
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();
        if(Order::where('id', $order->order_id)->where('is_enternal', false)->exists()) {
            return view('content-writer.external-order.show', [
                'order'          =>   $order,
                'designer_name' =>   $designer_name
            ]);
        }

        return view(
            'content-writer.internal-order.show',
            ['order' => $order]
        );
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order=Order::findOrFail($id);
        $order->update($request->all());
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

        return view('designer.task.create', ['order'=>$order,
            'designer_name' =>   $designer_name]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {

    }
}
