<?php

namespace App\Http\Controllers\Web\Designer;

use App\Http\Controllers\Controller;
use App\Models\Task;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class TimerCounterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $task= Task::find($request->task_id);
        $task->tasks_hour= \Carbon\Carbon::createFromFormat('H : i : s', $request->time);
        $task->save();

        return sendSuccessResponse(
            __('messages.update_data'),
        );
    }
}

