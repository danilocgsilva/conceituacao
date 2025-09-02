<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\UserRepositoryInterface;
use App\Support\PaginationData;
use App\Admin\ViewModel;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use App\Support\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UsersRegisteringSystemController extends Controller
{
    public function index(Request $request, UserRepositoryInterface $userRepository)
    {
        $paginationData = new PaginationData(
            (int) $request->query('page', "1"),
            10
        );
        $usersCollection = $userRepository->getPaginated($paginationData);

        return viewWithViewModel(
            'user-registering-system.index',
            ViewModel\Index::class,
            [
                'users' => $usersCollection,
                'pagination' => $paginationData
            ]
        );
    }

    public function myself(Request $request)
    {
        return viewWithViewModel(
            'user-registering-system.myself',
            ViewModel\Myself::class,
            [
                'user' => $request->user()
            ]
        );
    }

    public function updateMyself(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('myself.edit')
            ->with('status', 'profile-updated');
    }

    public function register(): View
    {
        return viewWithViewModel('user-registering-system.register', ViewModel\Register::class);
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(route('users-registering.index', absolute: false));
    }
}
