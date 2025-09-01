<?php

declare(strict_types=1);

namespace App\Admin\ViewModel;

use App\Contracts\ViewModelInterface;
use App\Support\Models\User;

class EditUser implements ViewModelInterface
{
    public const TITLE = "Editar usuário";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private User $user;

    public function __construct(array $data)
    {
        $this->user = $data['user'];
    }

    public function getTitle(): string
    {
        return self::TITLE;
    }

    public function getBodyClasses(): string
    {
        return self::BODY_CLASSES;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}

