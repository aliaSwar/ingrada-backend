<?php

namespace App\Http\Controllers\Web\ContentWriter;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ExternalOrderContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $user=Auth::user();
        $ordres=$user->orders;
        return view('content-writer.external-order.index', ['orders'=>$ordres]);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $order=Order::findOrFail($id);
      $designer_name=User::where('id',$order->designer_id)->select('fullname')->first();
        return view('content-writer.external-order.show',[
          'order'          =>   $order,
          'designer_name' =>   $designer_name
      ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
