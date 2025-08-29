<?php

declare(strict_types=1);

namespace App\ViewModel;

class Login implements ViewModelInterface
{
    public const TITLE = "Login";

    // public const BODY_CLASSES = "gradient-bg min-h-screen flex items-center justify-center p-4";
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
