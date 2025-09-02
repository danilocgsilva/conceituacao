<?php

namespace App\Http\Controllers;

use App\Contracts\ProfileRepositoryInterface;
use App\Profile;
use Illuminate\Http\Request;
use App\ViewModel;

class ProfileController
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

    public function store(Request $request)
    {
        return Profile::create($request->all());
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());
        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->noContent();
    }
}
