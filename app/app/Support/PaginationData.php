<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Collection;

class PaginationData
{
    private int $totalItems;

    public function __construct(
        public readonly int $currentPage,
        public readonly int $perPage
    ) {
    }

    public function getOffset(): int
    {
        return ($this->currentPage - 1) * $this->perPage;
    }

    public function getLimit(): int
    {
        return $this->perPage;
    }

    public function getTotalPages(): int
    {
        return (int) ceil($this->totalItems / $this->perPage);
    }

    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    public function setTotalItems(int $totalItems): self
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    public function isFirstPage(): bool
    {
        return $this->currentPage === 1;
    }

    public function isLastPage(): bool
    {
        return $this->currentPage === $this->getTotalPages();
    }
}
