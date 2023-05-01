<?php

namespace App\Http\Controllers\Manger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InternalCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('manger.internalcustomers.index', ['internalcustomers' => Customer::query()->paginate(7)]);
      // return view('manger.internalcustomers.index', ['internalcustomers' => Customer::where('is_enter', true)->paginate(7)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manger.internalcustomers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer): View
    {
        return view(
            'manger.internalcustomers.show',
            ['customer' => $customer]
        );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer): View
    {
        return view(
            'manger.internalcustomers.edit',
            ['customer' => $customer]
        );
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
    public function destroy(Customer $customer): RedirectResponse
    {
        $customer->update([
            'is_active'   => false,
        ]);
        return redirect()->route('manger.internalcustomers.index');
    }
}
