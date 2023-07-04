<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\setting\StorePrefernceVaalueRequest;
use App\Models\Prefernce;
use App\Models\PrefernceValue;
use Illuminate\Http\Request;

final class PrefernceValueController extends Controller
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
    public function create(Prefernce $prefernce)
    {
        //dd($prefernce);
        return view('setting.preferncesvalue.create', ['prefernce' => $prefernce]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrefernceVaalueRequest $request, Prefernce $prefernce)
    {
        //dd($prefernce);
        $image = $request->image;
        $path = $image->store('prevalue_images', 'public');
        $Preferncevalue = new PrefernceValue([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path,
            'prefernce_id'=>$prefernce->id
        ]);
        $Preferncevalue->save();

        return redirect()->route('types.index')->with(['message' => __("messages.create_data")]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {

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
