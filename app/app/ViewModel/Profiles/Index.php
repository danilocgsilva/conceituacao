<?php

declare(strict_types=1);

namespace App\ViewModel\Profiles;

use App\Contracts\ViewModelInterface;
use App\Contracts\ListableInterface;
use Illuminate\Database\Eloquent\Collection;

class Index implements ViewModelInterface, ListableInterface
{
    public const TITLE = "Listagem de perfis";

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

    public function getList(): Collection
    {
        return $this->profiles;
    }
}
