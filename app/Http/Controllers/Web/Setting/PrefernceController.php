<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\setting\StorePrefernceRequest;
use App\Models\Prefernce;
use App\Models\PrefernceValue;
use App\Models\Type;
use Illuminate\Http\Request;

final class PrefernceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Type $type)
    {
        return view('setting.prefernces.create', ['type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrefernceRequest $request, Type $type)
    {
        //dd($request->all());
        $image = $request->image;
        $path = $image->store('pre_images', 'public');
        // dd($type->id);
        $Prefernce = new Prefernce([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path,
            'type_id'=>$type->id
        ]);
        $Prefernce->save();
        $type->increment('proprties_current');
        $type->save();

        if($type->proprties_current===$type->proprtiesnumber) {
            return redirect()->route('types.index')->with(['message' => __("messages.create_data")]);
        }

        return redirect()->route('prefernc.create', ['type' => $type]);
    }

    /**
       * Display the specified resource.
       */
    public function show(Prefernce $Prefernce)
    {
        $PrefernceValue= PrefernceValue::where('prefernce_id', $Prefernce->id)->get();

        return view('setting.preferncesvalue.index', ['PrefernceValues' => $PrefernceValue]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {

    }
}
