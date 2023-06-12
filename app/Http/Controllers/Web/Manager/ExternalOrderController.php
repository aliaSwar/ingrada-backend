<?php

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Manager\StoreInternalOrderRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use App\Models\Order;
use App\Models\Type;
use Illuminate\View\View;

class ExternalOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
      $order=Order::query()
      ->where('is_enternal',false)
      ->where('is_order_designer',false)
      ->paginate(1);



      return view('manager.internal-orders.index', [
          'orders'          => $order ,
      ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
