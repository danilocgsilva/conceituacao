<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\ViewModel;

class UsersRegisteringSystemController extends Controller
{
    public function index()
    {
        return viewWithViewModel(
            'user-registering-system.index', 
            ViewModel\Index::class
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
