<?php

namespace App\Http\Controllers\Web;

use App\Actions\Web\Dashboard\AdminDashboardAction;
use App\Actions\Web\Dashboard\ContentWriterDashboardAction;
use App\Actions\Web\Dashboard\DesignerDashboardAction;
use App\Actions\Web\Dashboard\ManagerDashboardAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        if (auth()->user()->hasRole('admin'))
            (new AdminDashboardAction)();
        elseif (auth()->user()->hasRole('manager')) 
            (new ManagerDashboardAction)();
        elseif (auth()->user()->hasRole('content writer')) {
            (new ContentWriterDashboardAction)();
        }
        elseif (auth()->user()->hasRole('designer')) {
            (new DesignerDashboardAction)();
        }
        else 
            abort(403);
    }
}

