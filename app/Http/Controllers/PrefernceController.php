<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefernce;

class PrefernceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Prefernce.index', ['Prefernces' => Prefernce::all()]);
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
        $prefernce=new Prefernce($request->validated());
        $prefernce->save();
        return $prefernce;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prefernce  $prefernce )
    {
        return view('Prefernce.edit', ['prefernce' => $prefernce ]);
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
    public function destroy(Prefernce $prefernce)
    {
        $prefernce->delete();

        return redirect()->route('Prefernce.index');
    }
}
