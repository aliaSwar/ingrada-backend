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
        return view('setting.types.index', ['types' => Type::query()->paginate(100)]);
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
    public function store(StoreTypeRequest $request)//: RedirectResponse
    {

        $data = $request->validated();
        $type=Type::create($data);
        if ($request->proprtiesnumber >= 1) {
           return redirect()->route('prefernc.create',  ['type' => $type]);
        }

        return redirect()->route('types.index')->with(['message' => __("messages.create_data")]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
      $prefernce= Prefernce::where('type_id',$type->id)->get();
      return view ('setting.prefernces.index',  ['prefernces' => $prefernce]);

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
