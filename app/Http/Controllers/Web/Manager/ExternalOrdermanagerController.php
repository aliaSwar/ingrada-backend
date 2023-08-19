<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ExternalOrdermanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $order=Order::query()
            ->where('is_enternal', false)
            ->where('is_order_designer', false)
            ->paginate(1);



        return view('manager.external-orders.index', [
            'orders'          => $order ,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $order=Order::findOrFail($id);
      $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

      return view('manager.external-orders.show', [
          'order'          =>   $order,
          'designer_name'  =>   $designer_name,
          'users'          =>   User::query()
              ->role('content writer')
              ->where('is_deleted', false)
              ->where('is_active', true)
              ->get()
      ]);
    }


    public function store(Request $request, Order $order)/* : RedirectResponse */
    {
      $order->update($request->all());
      $order->users()->attach($request->user_id);

        return redirect()->route('external-orders.index')->with(['message' => __("messages.create_data")]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {

    }
}
