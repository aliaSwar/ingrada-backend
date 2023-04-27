<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\StoreColorRequest;
use App\Http\Requests\Setting\UpdateColorRequest;
use App\Models\Color;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('colors.index', ['colors' => Color::query()->paginate(7)]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorRequest $request): RedirectResponse
    {
        Color::create($request->validated());
        return redirect()->route('colors.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color): View
    {
        return view(
            'colors.show',
            ['color' => $color]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color): View
    {
        return view(
            'colors.edit',
            ['color' => $color]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request, Color $color): RedirectResponse
    {
        $color->query()->update($request->validated());
        return redirect()->route('colors.show', ['color' => $color])
            ->with(['message' => __("messages.update_data")]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color): RedirectResponse
    {
        $color->delete();
        return redirect()->route('colors.index')->with(['message' => __("messages.delete_data")]);
    }
}
