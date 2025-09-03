<?php

namespace App\Http\Controllers;

use App\Contracts\ProfileRepositoryInterface;
use App\Profile;
use App\Http\Requests\ProfileRequest;
use App\ViewModel;
use Illuminate\Http\RedirectResponse;
use App\Support\Http\Controller;


class ProfileController extends Controller
{
    public function index(ProfileRepositoryInterface $profileRepository)
    {
        return viewWithViewModel(
            'profile.index',
            ViewModel\Profiles\Index::class,
            [
                'profiles' => $profileRepository->all()
            ]
        );
    }

    public function create()
    {
        return viewWithViewModel(
            'profile.create',
            ViewModel\Profiles\Create::class
        );
    }

    public function edit(Profile $profile)
    {
        return viewWithViewModel(
            'profile.edit',
            ViewModel\Profiles\Edit::class,
            [
                'profile' => $profile
            ]
        );
    }

    public function store(ProfileRequest $request, ProfileRepositoryInterface $profileRepository): RedirectResponse
    {
        $profileRepository->create($request->validated());
        return redirect()->route('profile.index');
    }

    public function update(ProfileRequest $request, Profile $profile): RedirectResponse
    {
        $profile->update($request->validated());
        return redirect()->route('profile.index')
            ->with('success', 'Perfil atualizado com sucesso.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->noContent();
    }
}
