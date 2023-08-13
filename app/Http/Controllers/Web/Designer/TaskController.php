<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Designer;

use App\Actions\DistirbutionAlgorithmAction;
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
     * Display a listing of the resource.
     */
    public function index(): View
    {

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
     * Show the form for creating a new resource.
     */
    public function create($id): View
    {
        $order=Order::findOrFail($id);

        if ('Failed' ===$order->status) {

            return  redirect()->route('content-writer.external-orders.index')->with(['message'=>'the order refused!']);
        }
        $designer=User::find($order->designer_id);

        return view('designer.task.create', ['order'=>$order,'designer'=>$designer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        dd($request->all());
        $order=Order::find($id);
        $task=new Task;
        $task->start_date=$request->start_date;
        $task->end_date=$request->end_date;
        $task->real_end_date=$request->end_date;
        $task->name=$request->name;
        $task->status="Progress";
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

            return back();
        }
        $user=(new DistirbutionAlgorithmAction)($request);
        $task->user_id=$user->id;
        $task->save();
        $user->number_tasks_progress=$user->number_tasks_progress+1;
        $user->save();
        $order->designer_id=$user->id;
        $user->orders()->attach($order->id);

        return back();
    }

    /**
     * Display the specified resource.
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

    public function show_external_task($id,$task_id)
    {
        //return 1;
        $order=Order::findOrFail($id);
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

        return view('designer.task.show_externaltask', [
            'order'          =>   $order,
            'designer_name'  =>   $designer_name,
            'task_id'        =>          $task_id,
            'users'          =>   User::query()
                ->role('content writer')
                ->where('is_deleted', false)
                ->where('is_active', true)
                ->get()
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
      return view(
        'designer.task.index',
        ['tasks' => Task::where('user_id', auth()->user()->id)->paginate(7)]
    );
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
