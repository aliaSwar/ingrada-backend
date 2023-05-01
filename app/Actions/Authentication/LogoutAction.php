<?php

namespace App\Actions\Authentication;
use Illuminate\Support\Facades\Auth;

final class LogoutAction
{
    public function __invoke(): void
    {
        // Auth::shouldUse(config('auth.customer_guard_api'));
        $user = Auth::guard(config('auth.customer_guard_api'))->user();
        $user->currentAccessToken()->delete();
    }
}
