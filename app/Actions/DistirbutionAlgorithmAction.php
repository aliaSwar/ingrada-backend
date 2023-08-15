<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

final class DistirbutionAlgorithmAction
{
    public function __invoke(Request $request)
    {
        $users = User::query()
            ->with('tasks')
            ->role('designer')
            ->where('is_deleted', false)
                   //->where('category',$request->category)
            ->where('is_active', true)
            ->get();

        if ($users->isEmpty()) {
            abort(404);
        }

        $users_with_task_in_progress =User::query()
                                        ->with('tasks')
                                        ->withTaskCountInProgress($request->start_date,$request->end_date)
                                        ->role('designer')
                                        ->where('is_deleted', false)
                                        //->where('category',$request->category)
                                        ->where('is_active', true)
                                        ->orderBy('tasks_count', 'asc')
                                        ->get();
        //dont have any task in progress
        if ( 'high'===$request->prority) {
            return $users->first();
        }

        if ($users->first()->number_tasks <= $users->first()->tasks()->where('start_date',$request->satrt_date)->count()) {
            return null;
        }
        return $users->first();

    }
}
