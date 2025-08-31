<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Support\PaginationData;
use Illuminate\Database\Eloquent\Collection;

interface ListableInterface
{
    public function getList(): Collection;

    public function getPaginationData(): PaginationData;
}
