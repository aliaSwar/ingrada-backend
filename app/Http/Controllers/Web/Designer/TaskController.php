<?php

namespace App\Http\Controllers\Web\Designer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

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
    public function show(string $id)
    {
        return view('designer.task.show');
    }

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
