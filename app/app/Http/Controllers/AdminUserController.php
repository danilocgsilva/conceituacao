<?php

namespace App\Http\Controllers;

use App\Support\Http\Controller;
use App\ViewModel;
use App\Support\Models\User;
use App\Contracts\UserRepositoryInterface;
use App\Contracts\ProfileRepositoryInterface;
use App\Http\Requests\{
    CreateUserRequest,
    UpdateUserRequest
};
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    public function edit(User $user, ProfileRepositoryInterface $profileRepository)
    {
        return viewWithViewModel(
            'admin.edit',
            ViewModel\Users\EditUser::class,
            [
                'user' => $user->load('profiles'),
                'profiles' => $profileRepository->all()
            ]
        );
    }

    public function create(ProfileRepositoryInterface $profileRepository): View
    {
        return viewWithViewModel(
            'admin.create',
            ViewModel\Users\CreateUser::class,
            [
                'profiles' => $profileRepository->all()
            ]
        );
    }

    public function store(CreateUserRequest $request, UserRepositoryInterface $userRepository): RedirectResponse
    {
        $user = $userRepository->create($request->all());
        return redirect()->route('users-registering.index')
            ->with('success', "Usuário {$user->name} foi criado com sucesso.");
    }

    public function update(
        UpdateUserRequest $request,
        User $user,
        UserRepositoryInterface $userRepository
    ): RedirectResponse {
        $data = $request->only(['name', 'email']);

        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $data['profiles_ids'] = array_values($request->get('profiles_ids') ?? []);
        $userRepository->update($user->id, $data);

        $user->refresh();
        return redirect()->route('users-registering.index')
            ->with('success', "Usuário {$user->name} foi atualizado com sucesso.");
    }

    public function destroy(User $user): RedirectResponse
    {
        $userName = $user->name;
        $user->delete();
        return redirect()->route('users-registering.index')
            ->with('success', "{$userName} foi excluído com sucesso.");
    }
}
