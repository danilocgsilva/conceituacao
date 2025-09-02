<?php

declare(strict_types=1);

namespace App\ViewModel\Users;

use App\Contracts\ViewModelInterface;

class CreateUser implements ViewModelInterface
{
    public const TITLE = "Editar usuário";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    public function getTitle(): string
    {
        return self::TITLE;
    }

    public function getBodyClasses(): string
    {
        return self::BODY_CLASSES;
    }
}
