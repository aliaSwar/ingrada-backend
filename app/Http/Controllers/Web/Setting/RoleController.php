<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\Role\StoreRoleRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $roles = Role::query()->get();

        return view('setting.roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = Permission::query()->pluck('name', 'id');
        //dd($permissions);
        return view('setting.roles.create', [
            'permissions'  => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $role = new Role([
            'name' => $request->name
        ]);
        $role->save();
        $role->givePermissionTo($request->permissions);

        return redirect()->route('roles.index')->with([
            'message' => __('messages.create_data')
        ]);
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
