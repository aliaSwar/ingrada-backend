<?php

namespace App\Http\Controllers\Web\Manager;

use App\Actions\Web\StoreInternalOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Order;
use App\Models\Type;
use Illuminate\View\View;

class InternalOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $order=Order::query()
            ->with('tasks','users','customer')
            ->where('status','!=',Order::COMPLETED_STATUS)
            ->where('is_enternal',true)
            ->paginate(7);
            
        return view('manager.internal-orders.index', ['orders' => $order ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manager.internal-orders.create',[
            'types'    =>  Type::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInternalOrderRequest $request): RedirectResponse
    {
        (new StoreInternalOrderAction)($request);
        
        return redirect()->route('internal-orders.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order): View
    {
        return view(
            'manger.internalorders.show',
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
    public function update(Request $request, Order $order): RedirectResponse
    {
        $order->query()->update($request->validated());
        return redirect()->route('manger.internalorders.show', ['order' => $order])
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