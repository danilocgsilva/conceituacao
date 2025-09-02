<?php

declare(strict_types=1);

namespace App\Contracts;

use Illuminate\Support\Collection;
use App\Profile;
use App\Support\Models\User;

interface ProfileRepositoryInterface extends RepositoryInterface
{
    public function all(): Collection;

    public function find(int $id): ?Profile;

    public function findByName(string $name): ?User;

    public function create(array $data): Profile;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
