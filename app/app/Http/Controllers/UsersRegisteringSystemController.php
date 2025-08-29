<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel;

class UsersRegisteringSystemController extends Controller
{
    public function index()
    {
        return view('user-registering-system.index', [
            'viewData' => new ViewModel\Index()
        ]);
    }

    public function login()
    {
        return view('user-registering-system.login', [
            'viewData' => new ViewModel\Login()
        ]);
    }

    public function template()
    {
        return view('template', [
            'viewData' => new ViewModel\Template()
        ]);
    }
}
