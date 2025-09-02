<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\ViewModel;

class ProfileController
{
    public function index()
    {
        return viewWithViewModel(
            'profile.index',
            ViewModel\Profiles\Index::class,
            [
                'profiles' => Profile::all()
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
