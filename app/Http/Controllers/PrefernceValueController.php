<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefernceValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PrefernceValue.index', ['PrefernceValues' => PrefernceValue::all()]);
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
        $prefernceValue=new  PrefernceValue($request->validated());
        $prefernceValue->save();
        return $prefernceValue;

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
    public function edit(PrefernceValue $PrefernceValue)
    {
        return view('PrefernceValue.edit', ['PrefernceValue' => $PrefernceValue ]);
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
    public function destroy(PrefernceValue $prefernceValue)
    {
        $prefernceValue->delete();

        return redirect()->route('PrefernceValue.index');
    }
}
