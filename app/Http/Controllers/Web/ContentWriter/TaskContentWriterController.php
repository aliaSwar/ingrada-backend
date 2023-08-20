<?php

namespace App\Http\Controllers\Web\ContentWriter;

use App\Actions\DistirbutionAlgorithmAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Task;
use App\Models\Category;
use App\Models\FileTask;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskContentWriterController extends Controller
{


//display all task for review to content creator
  public function index()
    {
      return view(
               'content-writer.tasks.index',
               ['tasks' => Task::where('giver_id', auth()->user()->id)->where('status','Test')->paginate(7)]);
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
        return view('content-writer.orders.create-task', ['order'=>$order,'designer'=>$designer,'categories' => Category::all()]);
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
        $task->status="Progress";
        $task->description=$request->description;
        $task->order_id=$order->id;
        $task->type=$order->type;
        $task->category=$request->category;

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

        /* $path=uploadFile($request->edit_file,'tasks');
        $file_task=new FileTask([
          'path'         =>      $path,
          'task_id'      =>      $task->id
        ]);
        $file_task->save(); */

        $user->number_tasks_progress=$user->number_tasks_progress+1;
        $user->save();
        $order->designer_id=$user->id;
        $user->orders()->attach($order->id);

        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $task=Task::findOrFail($id);
        $order=Order::findOrFail($task->order_id);

//task for internal order
        if(Order::where('id', $task->order_id)->where('is_enternal', true)->exists()) {
            return view(
                'content-writer.tasks.showInternal',
                ['order' => $order,
                'task'=>$task
                ]
            );
        }

        return $this->show_external_order($order,$task);
    }

    //task for external order
    public function show_external_order($order,$task)
    {
        //return 1;
        $designer_name=User::where('id', $order->designer_id)->select('fullname')->first();

        return view('content-writer.tasks.showExternal', [
            'order'          =>   $order,
            'designer_name'  =>   $designer_name,
            'task'        =>          $task,
        ]);

      }
}
