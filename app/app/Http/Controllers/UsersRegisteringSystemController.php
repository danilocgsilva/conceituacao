<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\UserRepositoryInterface;
use App\Support\PaginationData;
use App\ViewModel;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class UsersRegisteringSystemController extends Controller
{
    public function index(Request $request, UserRepositoryInterface $userRepository)
    {
        $paginationData = new PaginationData(
            (int) $request->query('page', "1"),
            5
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

    public function login()
    {
        return viewWithViewModel(
            'user-registering-system.login', 
            ViewModel\Login::class
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

        return Redirect::route('myself.edit')->with('status', 'profile-updated');
    }
}
