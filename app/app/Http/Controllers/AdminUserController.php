<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Admin\ViewModel;
use App\Support\Models\User;

class AdminUserController extends Controller
{
    public function edit(User $user)
    {
        return viewWithViewModel(
            'admin.edit', 
            ViewModel\EditUser::class,
            [
                'user' => $user
            ]
        );
    }
}
