<?php

declare(strict_types=1);

namespace App\ViewModel\Users;

use App\Contracts\ViewModelInterface;
use Illuminate\Support\Collection;

class CreateUser implements ViewModelInterface
{
    public const TITLE = "Editar usuário";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private Collection $profiles;

        public function __construct(array $data)
    {
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

    public function getProfiles(): Collection
    {
        return $this->profiles;
    }

    /**
     * This method is used in role listing for create user form. This method returns a user
     *   if in edit form, but for creating form the user does not exists and should not
     *   break the blade rendering.
     */
    public function getUser(): null
    {
        return null;
    }
}
