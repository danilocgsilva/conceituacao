<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\ProfileRepositoryInterface;
use App\Support\Models\User;
use Illuminate\Support\Collection;
use App\Contracts\UserRepositoryInterface;
use App\Support\PaginationData;

class UserRepository implements UserRepositoryInterface
{
    private PaginationData $paginationData;

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
        $user = User::create($data);
        $user->profiles()->sync(
            array_values($data['profiles_ids']) ?? []
        );
        return $user;
    }

    public function createOrUpdate(array $data): User
    {
        return User::updateOrCreate(['name' => $data['name']], $data);
    }

    public function update(int $id, array $data): bool
    {
        $user = $this->find($id);
        if (isset($data['profiles_ids'])) {
            $user->profiles()->sync(
                array_values($data['profiles_ids']) ?? []
            );
        }
        return $user ? $user->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $user = $this->find($id);
        return $user ? (bool) $user->delete() : false;
    }

    public function getPaginatedAndQuery(PaginationData $paginationData, string $query = null): Collection
    {
        $builder = User::query();
        
        if ($query) {
            $builder->where('name', 'like', "%{$query}%")
                ->orWhere('email', 'like', "%{$query}%");
        }
        
        $this->paginationData = $paginationData;
        $this->paginationData->setTotalItems($builder->count());
        
        return $builder->paginate(
            $paginationData->perPage,
            ['*'],
            'page',
            $paginationData->currentPage
        )->getCollection();
    }
}
