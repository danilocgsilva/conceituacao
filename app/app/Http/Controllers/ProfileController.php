<?php

namespace App\Http\Controllers;

use App\Contracts\ProfileRepositoryInterface;
use App\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
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

    public function store(StoreProfileRequest $request, ProfileRepositoryInterface $profileRepository): RedirectResponse
    {
        $profileRepository->create($request->validated());
        return redirect()->route('profile.index');
    }

    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());
        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->noContent();
    }
}
