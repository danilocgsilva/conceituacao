<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Profile;
use Illuminate\Support\Collection;
use App\Contracts\ProfileRepositoryInterface;
use App\Support\PaginationData;

class ProfileRepository implements ProfileRepositoryInterface
{
    private PaginationData $paginationData;

    public function all(): Collection
    {
        return Profile::all();
    }

    public function find(int $id): ?Profile
    {
        return Profile::find($id);
    }

    public function findByName(string $name): ?Profile
    {
        return Profile::where('name', $name)->first();
    }

    public function create(array $data): Profile
    {
        return Profile::create($data);
    }

    public function createOrUpdate(array $data): Profile
    {
        return Profile::updateOrCreate(['name' => $data['name']], $data);
    }

    public function update(int $id, array $data): bool
    {
        $profile = $this->find($id);
        return $profile ? $profile->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $profile = $this->find($id);
        return $profile ? (bool) $profile->delete() : false;
    }
}
