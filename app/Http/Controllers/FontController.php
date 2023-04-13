<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Font;
use  App\Http\Requests\StoreFontRequest;

class FontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Font.index', ['fonts' => Font::all()]);
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
    public function store(StoreFontRequest  $request)
    {
        $font=new Font($request->validated());
        $font->save();
        return $font;
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
    public function edit(Font $font)
    {
        return view('Font.edit', ['Font' => $font]);
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
    public function destroy(Font $font)
    {
        $font->delete();

        return redirect()->route('Font.index');
    }
}
