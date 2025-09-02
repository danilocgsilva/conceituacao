<?php

declare(strict_types=1);

namespace App\ViewModel;

use App\Contracts\ListableInterface;
use App\Contracts\ViewModelInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Support\PaginationData;

class Index implements ViewModelInterface, ListableInterface
{
    public const TITLE = "Índice";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private Collection $users;

    private PaginationData $paginationData;

    public function __construct(array $data)
    {
        $this->users = $data['users'];
        $this->paginationData = $data['pagination'];
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
        return $this->users;
    }

    public function getPaginationData(): PaginationData
    {
        return $this->paginationData;
    }
}
