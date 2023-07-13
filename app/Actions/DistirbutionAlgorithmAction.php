<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

final class DistirbutionAlgorithmAction
{
    public function __invoke(Request $request)
    {
        $users = User::with('tasks')
            ->role('designer')
            ->where('is_deleted', false)
                   //->where('category',$request->category)
            ->where('is_active', true)
            ->get();

        if ($users->isEmpty()) {
            return dd('errors.404');
        }

        $users_with_task_in_progress =$users->withTaskCountInProgressAndStartDateBetween($request->start_date)
            ->orderBy('number_tasks_progress', 'asc')
            ->get();

        //dont have any task in progress
        if ($users_with_task_in_progress->isEmpty() && 'high'===$request->prority) {

            return $users->first();
        }
        // have task in progress
        if ($users_with_task_in_progress->isNotEmpty()) {
            return $users_with_task_in_progress->first();
        }
    }
}
