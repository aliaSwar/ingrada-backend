<?php

namespace App\Http\Controllers\Web\Manager;

use App\Actions\Web\StoreInternalOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Order;
use App\Models\Type;
use App\Models\User;
use Illuminate\View\View;

class InternalOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

      $ordeer = Order::where('is_enternal', true)->get();
      //return $ordeer;

      return view(
        'manager.internal-orders.index',
        ['orders' => $ordeer]
    );


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::role('content writer')
                    ->where('is_deleted',false)
                    ->where('is_active',true)
                    ->get();
    
        return view('manager.internal-orders.create',[
            'types'              =>  Type::query()->get(),
            'internal_customers' => Customer::query()->get(),
            'categories_user'=>  $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInternalOrderRequest $request)/* : RedirectResponse */
    {

     // (new StoreInternalOrderAction)($request);
      return $request;


  //      return redirect()->route('internal-orders.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
      $order=Order::findOrFail($id);


        return view(
            'manager.internal-orders.show',
            ['order' => $order]
        );


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order): View
    {
        return view(
            'manger.internalorders.edit',
            ['order' => $order]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)/* : RedirectResponse */
    {
        //sdd($request->all());
        $order->update($request->all());
        return redirect()->route('internal-orders.index', ['order' => $order])
            ->with(['message' => __("messages.update_data")]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order): RedirectResponse
    {
        $order->delete();
        return redirect()->route('manger.internalorders.index')->with(['message' => __("messages.delete_data")]);
    }
}
