<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Designer;

use App\Actions\DistirbutionAlgorithmAction;
use App\Actions\web\GetPointLastMonthAction;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class TaskController extends Controller
{
    /**
     * Display a tasks from content writer
     */
    public function index()
    {

    $designerPoints=( new GetPointLastMonthAction)();
    return view(
        'designer.task.index',
        ['tasks' => Task::where('user_id', auth()->user()->id)->paginate(7)]
    );
    }


    public function index_external(): View
    {
        $order=Order::query()
            ->where('is_enternal', false)
            ->where('is_order_designer', true)
            ->where('designer_id', auth()->user()->id)
            ->paginate(7);

        return view('designer.task.index_external', [
            'orders'          => $order ,
        ]);
    }


    /**
     * Display the specified resource.
     * request id task
     */
    public function show($id)
    {
        $task=Task::findOrFail($id);
        $order=Order::findOrFail($task->order_id);


        if(Order::where('id', $task->order_id)->where('is_enternal', true)->exists()) {
            return view(
                'designer.task.show',
                ['order' => $order,
                'task_id'=>$id
                ]
            );
        }

        return $this->show_external_task($task->order_id,$id);
    }

    public function show_external($id)
    {
        //return 1;
        $order=Order::findOrFail($id);
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

        return view('designer.task.show_external', [
            'order'          =>   $order,
            'designer_name'  =>   $designer_name,
            'users'          =>   User::query()
                ->role('content writer')
                ->where('is_deleted', false)
                ->where('is_active', true)
                ->get()
        ]);
    }
//coming from content writer
    public function show_external_task($id,$task_id)
    {
        //return 1;
        $order=Order::findOrFail($id);
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

        return view('designer.task.show_externaltask', [
            'order'          =>   $order,
            'designer_name'  =>   $designer_name,
            'task_id'        =>          $task_id,
        ]);
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
    public function update(Request $request, $id)
    {
    //  dd($request->status);
      $task=Task::findOrFail($id);
      $task->status=$request->status;
      $task->save();

      $order=Order::findOrFail($task->order_id);
      $order->update($request->all());
      return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function store_external(Request $request, Order $order)
    {
        $order->update($request->all());
        $order->users()->attach($request->user_id);

        return redirect()->route('in_ex');
    }


    public function get_todotask()
    {
        $Progress=Task::where('user_id', auth()->user()->id)->where('status', 'InProgress')->get();
        $Tests=Task::where('user_id', auth()->user()->id)->where('status', 'Test')->get();
        $Fixs=Task::where('user_id', auth()->user()->id)->where('status', 'Fix')->get();
        $Completeds=Task::where('user_id', auth()->user()->id)->where('status', 'Completed')->get();

        return view('designer.task.to_do', ['Progress'=>$Progress,
            'Tests'=>$Tests,
            'Fixs'=>$Fixs,
            'Completeds'=>$Completeds,

        ]);

    }

}
