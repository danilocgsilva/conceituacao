<?php

declare(strict_types=1);

namespace App\ViewModel\Users;

use App\Contracts\ViewModelInterface;

class Login implements ViewModelInterface
{
    public const TITLE = "Login";

    public const BODY_CLASSES = "gradient-bg min-h-screen";

    public function getTitle(): string
    {
        return self::TITLE;
    }

    public function getBodyClasses(): string
    {
        return self::BODY_CLASSES;
    }
}
