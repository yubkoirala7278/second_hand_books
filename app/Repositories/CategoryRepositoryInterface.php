<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
   
    public function getPaginated(?string $search, string $sortField, string $sortDirection, int $perPage): LengthAwarePaginator;
    public function create(array $data): Category;
    public function find(int $id): Category;
    public function update(int $id, array $data): Category;
    public function delete(int $id): void;
    public function deleteMultiple(array $ids): void;
    public function generateUniqueSlug(string $name, ?int $excludeId = null): string;
}