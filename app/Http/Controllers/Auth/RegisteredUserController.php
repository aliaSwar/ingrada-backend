<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUser\RegisteredUserRequest;
use App\Models\User;
use App\Models\Category;
use App\Notifications\UserPublish;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{

  public function index(): View
    {
       return view('users.index', ['users' => User::whereNotNull('category_id')->with('category')->paginate(4)]);
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {

        return view('users.create',
        [ 'roles'       => Role::all(),
          'categories'  =>  Category::all() ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisteredUserRequest $request): RedirectResponse
    {

        $data = $request->validated();
        $data = Arr::add($data, 'avatar', uploadFile($request->path, 'users'));

        $user = new User($data);
        $user->save();
        $user->assignRole($request->role);
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }

       // Notification::send($user, new UserPublish($user));


        return redirect(RouteServiceProvider::HOME);
    }
}
