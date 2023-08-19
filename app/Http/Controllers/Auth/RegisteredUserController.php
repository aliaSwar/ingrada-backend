<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUser\RegisteredUserRequest;
use App\Models\Category;
use App\Models\User;
use App\Notifications\UserPublish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

final class RegisteredUserController extends Controller
{
    public function index(): View
    {
        return view('users.index', ['users' => User::with('categories')->where('is_super_admin',false)->paginate(7)]);
    }

        /**
         * Display the registration view.
         */
        public function create(): View
        {

            return view('users.create', [
                'roles'       => Role::all(),
                'categories'  =>  Category::all()
            ]);
        }


        public function show(User $user): View
        {
            return view(
                'users.show',
                ['user'=>$user]
            );
        }

    /**
       * Handle an incoming registration request.
       *
       * @throws \Illuminate\Validation\ValidationException
       */
        public function store(RegisteredUserRequest $request): RedirectResponse
        {

            $data = $request->validated();
            $data['avatar'] =  uploadFile($request->path, 'users');
            if ($request->category_id) {
                $data['category']=Category::findOrFail($request->category_id)->name;
                $data['category_id']=$request->category_id;
            }
            $user = new User($data);
            $user->save();

            $user->assignRole($request->role);

            if (!$user) {
                return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
            }

            Notification::send($user, new UserPublish($user));


            return redirect()->route('users.index');
        }
        function destroy(User $user) {
             $user->delete();
             return redirect()->back();
        }
}
