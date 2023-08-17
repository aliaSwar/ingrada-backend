<?php

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Order;

class GetCompletedOrdersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke()
    {

        return view('manager.complete_orders',
        [
          'orders'=>  Order::query()
                         ->where('status','Completed')
                         ->where('is_enternal',false)
                         ->paginate(15)
        ]);
    }
}

