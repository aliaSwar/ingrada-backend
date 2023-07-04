<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\StoreInternalCustomerRequest;
use App\Http\Requests\Manager\UpdateInternalCustomerRequest;
use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;

final class InternalCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('manager.internal-customers.index', ['internal_customers' => Customer::query()->paginate(7)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manager.internal-customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInternalCustomerRequest $request)
    {
        $data = $request->validated();
        //  $data = Arr::add($data, 'avatar', uploadFile($request->path, 'internal-customers'));
        Customer::create($data);

        return redirect()->route('manager.internal-customers.index')->with(['message' => __('messages.create_data')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer): View
    {
        return view(
            'manager.internal-customers.show',
            ['customer' => $customer]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer): View
    {
        return view(
            'manager.internal-customers.edit',
            ['customer' => $customer]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInternalCustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();
        $data['is_enter'] = true;
        $data = Arr::add($data, 'avatar', uploadFile($request->path, 'internal-customers'));
        Customer::create($data);

        return redirect()->route('customers.index')->with(['message' => __('messages.create_data')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer): RedirectResponse
    {
        $customer->update([
            'is_active'   => false,
        ]);

        return redirect()->route('manager.internal-customers.index');
    }
}
