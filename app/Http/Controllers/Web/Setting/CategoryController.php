<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\setting\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('setting.category.index',['cateogries'=> Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category=new Category($request->validated());
        $category->save();
        

        return redirect()->route('categories.index')->with(['message' => __("messages.create_data")]);
        
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