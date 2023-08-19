<?php

namespace App\Http\Controllers\Web\Manager;
use APP\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //should get just designer
      return view('manager.designer.index', ['users' => User::role('designer')->with('categories')->where('is_super_admin',false)->paginate(7)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
      $user=User::findorfail($id);
      return view(
        'manager.designer.show',['user'=>$user]
    );
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
}
