<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\UserRepositoryInterface;
use App\Support\PaginationData;
use App\ViewModel;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UsersIndexRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RemoveMyselfRequest;

class UsersRegisteringSystemController extends Controller
{
    public function index(UsersIndexRequest $request, UserRepositoryInterface $userRepository)
    {
        $paginationData = new PaginationData(
            (int) $request->query('page', "1"),
            10
        );
        $usersCollection = $userRepository->getPaginatedAndQuery(
            $paginationData,
            $query = $request->get('query')
        );

        return viewWithViewModel(
            'user-registering-system.index',
            ViewModel\Users\Index::class,
            [
                'users' => $usersCollection,
                'pagination' => $paginationData,
                'query' => $query
            ]
        );
    }

    public function myself(Request $request)
    {
        return viewWithViewModel(
            'user-registering-system.myself',
            ViewModel\Users\Myself::class,
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
            ->with('status', 'Perfil atualizado');
    }

    public function register(): View
    {
        return viewWithViewModel('user-registering-system.register', ViewModel\Users\Register::class);
    }

    public function removeMyself(RemoveMyselfRequest $request): RedirectResponse
    {
        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function store(RegisterRequest $request, UserRepositoryInterface $userRepository): RedirectResponse
    {
        $user = $userRepository->create($request->all());

        event(new Registered($user));

        return redirect(route('users-registering.index', absolute: false));
    }
}
