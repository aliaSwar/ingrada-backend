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
        if (auth()->user()->hasRole('admin')){
            $data=(new AdminDashboardAction)();
      
            return view('dashboard',['data'=>$data]);
        }
        elseif (auth()->user()->hasRole('manager')){
            $data=(new ManagerDashboardAction)();
            return view('manger_dashboard', compact('data'));
        }
        elseif (auth()->user()->hasRole('content writer')) {
            $data=(new ContentWriterDashboardAction)();
            return view('content-writer-dashboard', compact('data'));
        }
        elseif (auth()->user()->hasRole('designer')) {
            $data=(new DesignerDashboardAction)();
            return view('designer_dashboard', compact('data'));
        }
        else
            abort(403);
    }
}

