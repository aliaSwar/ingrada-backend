<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUser\ActiveUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

final class ActivedUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.actived-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActiveUserRequest $request): RedirectResponse
    {
        User::query()->where(
            'email',
            $request->input('email')
        )->update([
            'is_active' => 1,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
