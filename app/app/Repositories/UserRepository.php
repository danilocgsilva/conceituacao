<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
public function all(): Collection
    {
        return User::all();
    }

    public function find(int $id): ?User
    {
        return User::find($id);
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $user = $this->find($id);
        return $user ? $user->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $user = $this->find($id);
        return $user ? (bool) $user->delete() : false;
    }
}
