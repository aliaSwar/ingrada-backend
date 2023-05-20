<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\StoreTypeRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Type;
use App\Models\Prefernce;

class TypeCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('setting.types.index', ['types' => Type::query()->paginate(7)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('setting.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $type=Type::create($data);
        $image = $request->preImage;
        $path = $image->store('pre-images', 'public');
        $Prefernce = new Prefernce([
            'name' => $request->prename,
            'price' => $request->preprice,
            'image' => $path
        ]);
        $type->prefernces()->save($Prefernce);

        return redirect()->route('types.index')->with(['message' => __("messages.create_data")]);
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
    public function destroy(Type $type): RedirectResponse
    {
        $type->delete();
        return redirect()->route('types.index')->with(['message' => __("messages.delete_data")]);
    }
}
