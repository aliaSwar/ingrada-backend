<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\setting\StoreScopeRequest;
use App\Http\Requests\setting\UpdateScopeRequest;
use App\Models\Scope;
use App\Models\Font;
use App\Models\Color;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ScopeCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('setting.scopes.index', ['scopes' => Scope::query()->paginate(7)]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('setting.scopes.create', [
            'fonts' => Font::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScopeRequest $request): RedirectResponse
    {
        //dd($request->all());
       // $scope = scope::create($request->validated());
       $colors=Color::where(function ($query) use ($request) {

        $query->whereNotIn('code', $request->colors);
    })->get();
       dd($colors);
        $scope->colors()->sync($request->colors);
        //$scope->fonts()->sync($request->fonts);
        return redirect()->route('scopes.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(scope $scope): View
    {
        return view(
            'setting.scopes.show',
            ['scope' => $scope]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(scope $scope): View
    {
        return view(
            'setting.scopes.edit',
            ['scope' => $scope]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScopeRequest $request, scope $scope): RedirectResponse
    {
        $scope->query()->update($request->validated());
        return redirect()->route('scopes.show', ['scope' => $scope])
            ->with(['message' => __("messages.update_data")]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(scope $scope): RedirectResponse
    {
        $scope->delete();
        return redirect()->route('scopes.index')->with(['message' => __("messages.delete_data")]);
    }
}
