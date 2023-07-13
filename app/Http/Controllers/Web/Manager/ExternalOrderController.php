<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ExternalOrderController extends Controller
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
    public function show(string $id): void
    {
        /* return  */
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
