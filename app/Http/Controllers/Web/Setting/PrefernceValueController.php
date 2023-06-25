<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prefernce;
use App\Models\Type;
use App\Models\PrefernceValue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\setting\StorePrefernceVaalueRequest;


class PrefernceValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Prefernce $prefernce)
    {
      //dd($prefernce);
      return view ('setting.preferncesvalue.create',  ['prefernce' => $prefernce]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrefernceVaalueRequest $request,Prefernce $prefernce)
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
    public function destroy(string $id)
    {
        //
    }
}
