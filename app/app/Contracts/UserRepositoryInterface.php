<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Support\PaginationData;
use Illuminate\Support\Collection;
use App\Support\Models\User;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function all(): Collection;

    public function find(int $id): ?User;

    public function findByEmail(string $email): ?User;

    public function create(array $data): User;

    public function createOrUpdate(array $data): User;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;

    public function getPaginatedAndQuery(PaginationData $paginationData, string $query = null): Collection;
}
