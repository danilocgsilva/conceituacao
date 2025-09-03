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

    public function create()
    {
        return viewWithViewModel(
            'admin.create',
            ViewModel\Users\CreateUser::class
        );
    }

    public function store(CreateUserRequest $request, UserRepositoryInterface $userRepository)
    {
        $user = $userRepository->create($request->all());
        return redirect()->route('users-registering.index')
            ->with('success', "Usuário {$user->name} foi criado com sucesso.");
    }

    public function update(
        UpdateUserRequest $request, 
        User $user, 
        UserRepositoryInterface $userRepository
    ): RedirectResponse
    {
        $data = $request->only(['name', 'email']);
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $userRepository->update($user->id, $data);

        return redirect()->route('users-registering.index')
            ->with('success', "Usuário atualizado com sucesso.");
    }

    public function destroy(User $user)
    {
        $userName = $user->name;
        $user->delete();
        return redirect()->route('users-registering.index')
            ->with('success', "{$userName} foi excluído com sucesso.");
    }
}
