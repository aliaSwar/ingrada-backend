<?php

namespace App\Http\Controllers\Web\Designer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Order;
use App\Models\User;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return view('designer.task.index',
        ['tasks' => Task::where('user_id', auth()->user()->id)->paginate(7)]);
    }


    public function index_external(): View
    {
      $order=Order::query()
      ->where('is_enternal',false)
      ->where('is_order_designer',true)
      ->where('designer_id', auth()->user()->id)
      ->paginate(7);
      return view('designer.task.index_external', [
        'orders'          => $order ,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       // return "ff";
        return view('designer.task.index',
       ['tasks' => Task::where('user_id', auth()->user()->id)->paginate(7)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $order=Task::findOrFail($id);


        return view(
            'designer.task.show',
            ['order' => $order]
        );




      $categories_user=[
        Category::CATEGORY_CONTENT_WRITER_BIG,
        Category::CATEGORY_CONTENT_WRITER_SMALL,
        Category::CATEGORY_CONTENT_WRITER_MEDIUM,
   ];

      //  return view('designer.task.show',  ['order'=>$order ]);
    }

    public function show_external($id)
    {
      //return 1;
    $order=Order::findOrFail($id);
    $designer_name=User::where('id',$order->designer_id)->select('fullname')->first();
      return view('designer.task.show_external',[
        'order'          =>   $order,
        'designer_name' =>   $designer_name
    ]);}







    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function get_todotask()
    {
        $Progress=Task::where('user_id', auth()->user()->id)->where('status','Progress')->get();
        $Tests=Task::where('user_id', auth()->user()->id)->where('status','Test')->get();
        $Fixs=Task::where('user_id', auth()->user()->id)->where('status','Fix')->get();
        $Completeds=Task::where('user_id', auth()->user()->id)->where('status','Completed')->get();

        return view('designer.task.to_do'
        , ['Progress'=>$Progress,
            'Tests'=>$Tests,
            'Fixs'=>$Fixs,
            'Completeds'=>$Completeds,

    ]);

    }

}
