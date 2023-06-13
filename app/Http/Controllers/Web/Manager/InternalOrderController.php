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
use Illuminate\View\View;

class InternalOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      //  $order=Order::query()
            // ->with('tasks'/* ,'customer','users' */)
      //      ->where('status','!=',Order::COMPLETED_STATUS)
            //->where('is_enternal',true)
      //      ->paginate(1);

      // $categories_user=[
      //      Category::CATEGORY_CONTENT_WRITER_BIG,
      //      Category::CATEGORY_CONTENT_WRITER_SMALL,
      //      Category::CATEGORY_CONTENT_WRITER_MEDIUM,
      //  ];

      //  return view('manager.internal-orders.index', [
      //      'orders'          => $order ,
      //      'types'           => Type::query()->get(),
      //      'categories_user' => $categories_user,
      //  ]);
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
        $categories_user=[
            Category::CATEGORY_CONTENT_WRITER_BIG,
            Category::CATEGORY_CONTENT_WRITER_SMALL,
            Category::CATEGORY_CONTENT_WRITER_MEDIUM,
            'fast'
        ];
        return view('manager.internal-orders.create',[
            'types'    =>  Type::query()->get(),
            'categories_user' => $categories_user,
            'internal_customers' => Customer::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInternalOrderRequest $request)/* : RedirectResponse */
    {
      //return $request;

        (new StoreInternalOrderAction)($request);


        return redirect()->route('internal-orders.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order): View
    {
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
