<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\StoreScopeRequest;
use App\Models\Scope;

class ScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Scope.index', ['Scopes' => Scope::all()]);
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
        $scope=new Scope($request->validated());
        $scope->save();
        return $scope;
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
    public function edit(Scope $scope)
    {
        return view('Scope.edit', ['Scope' => $scope ]);
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
    public function destroy(Scope $scope)
    {
        $scope->delete();

        return redirect()->route('Scope.index');
    }
}
