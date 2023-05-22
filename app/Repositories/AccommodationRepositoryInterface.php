<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface AccommodationRepositoryInterface
{
    public function all(): Collection;

    public function find(int $id): ?Accommodation;

    public function create(array $data): Accommodation;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
