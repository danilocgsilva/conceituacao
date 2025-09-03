<?php

declare(strict_types=1);

namespace App\ViewModel\Users;

use App\Contracts\ViewModelInterface;
use App\Support\Models\User;
use Illuminate\Support\Collection;

class EditUser implements ViewModelInterface
{
    public const TITLE = "Editar usuário";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private User $user;

    private Collection $profiles;

    public function __construct(array $data)
    {
        $this->user = $data['user'];
        $this->profiles = $data['profiles'];
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

    public function getProfiles(): Collection
    {
        return $this->profiles;
    }
}

