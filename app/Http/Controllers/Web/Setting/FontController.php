<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\setting\StoreFontRequest;
use App\Http\Requests\setting\UpdateFontRequest;
use App\Models\Font;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('setting.fonts.index', ['fonts' => Font::query()->paginate(100)]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('setting.fonts.create', ['fonts' => Font::query()->paginate(7)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFontRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['file']=uploadFile($request->file,'fonts');
        Font::create($data);
        return redirect()->back()->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Font $font): View
    {
        return view(
            'fonts.show',
            ['font' => $font]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Font $font): View
    {
        return view(
            'fonts.edit',
            ['font' => $font]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFontRequest $request, Font $font): RedirectResponse
    {
        $data = $request->validated();
        $data = Arr::add($data, 'file', uploadFile($request->path, 'fonts'));

        $font->query()->update($data);
        return redirect()->route('fonts.show', ['font' => $font])
            ->with(['message' => __("messages.update_data")]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Font $font): RedirectResponse
    {
        $font->delete();
        return redirect()->back()->with(['message' => __("messages.delete_data")]);
    }
}
