<?php

namespace App\Http\Controllers\Web\ContentWriter;

use App\Actions\DistirbutionAlgorithmAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create($id): View
    {
        $order=Order::findOrFail($id);

        if ('Failed' ===$order->status) {

            return  redirect()->route('content-writer.external-orders.index')->with(['message'=>'the order refused!']);
        }
        $designer=User::find($order->designer_id);

        return view('content-writer.orders.create-task', ['order'=>$order,'designer'=>$designer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $order=Order::find($id);
        $task=new Task();
        $task->giver_id=auth()->id();
        $task->start_date=$request->start_date;
        $task->end_date=$request->end_date;
        $task->real_end_date=$request->end_date;
        $task->name=$request->name;
        $task->status="InProgress";
        $task->description=$request->description;
        $task->order_id=$order->id;
        $task->type=$order->type;
        $task->category="fast";

        if ($order->designer_id) {
            $task->user_id=$order->designer_id;
            $task->save();
            $user=User::find($order->designer_id);
            $user->number_tasks_progress=$user->number_tasks_progress+1;
            $user->save();
            $user->orders()->attach($order->id);

            return redirect()->route('orders.index');
        }
        $user=(new DistirbutionAlgorithmAction)($request);
        $task->user_id=$user->id;
        $task->save();
        $user->number_tasks_progress=$user->number_tasks_progress+1;
        $user->save();
        $order->designer_id=$user->id;
        $user->orders()->attach($order->id);

        return redirect()->route('orders.index');
    }
}
