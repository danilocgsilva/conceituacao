<?php

declare(strict_types=1);

namespace App\ViewModel\Users;

use App\Contracts\ViewModelInterface;
use App\Support\Models\User;

class Myself implements ViewModelInterface
{
    public const TITLE = "Minhas informações";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private User $user;

    public function __construct(array $data)
    {
        $this->user = $data['user'];
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getTitle(): string
    {
        return self::TITLE;
    }

    public function getBodyClasses(): string
    {
        return self::BODY_CLASSES;
    }
}
