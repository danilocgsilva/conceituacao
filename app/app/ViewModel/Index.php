<?php

declare(strict_types=1);

namespace App\ViewModel;

class Index implements ViewModelInterface
{
    public const TITLE = "Índice";
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
