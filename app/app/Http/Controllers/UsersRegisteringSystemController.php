<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\UserRepositoryInterface;
use App\Support\PaginationData;
use App\ViewModel;
use Illuminate\Http\Request;

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

    public function template()
    {
        return viewWithViewModel(
            'template', 
            ViewModel\Template::class
        );
    }
}
