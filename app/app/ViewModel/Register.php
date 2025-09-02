<?php

declare(strict_types=1);

namespace App\ViewModel;

use App\Contracts\ViewModelInterface;

class Register implements ViewModelInterface
{
    public const TITLE = "Se cadastre";

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
