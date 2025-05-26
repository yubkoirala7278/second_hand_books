<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * Retrieve paginated categories with optional search and sorting.
     *
     * 
     */
    public function getPaginated(?string $search, string $sortField, string $sortDirection, int $perPage): LengthAwarePaginator
    {
        return Category::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . trim($search) . '%')
                    ->orWhere('slug', 'like', '%' . trim($search) . '%');
            })
            ->orderBy($sortField, $sortDirection)
            ->paginate($perPage);
    }

    /**
     * Create a new category.
     *
     * 
     */
    public function create(array $data): Category
    {
        return Category::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['slug']),
        ]);
    }

    /**
     * Find a category by ID.
     *
     *
     */
    public function find(int $id): Category
    {
        return Category::findOrFail($id);
    }

    /**
     * Update an existing category.
     *
     * 
     */
    public function update(int $id, array $data): Category
    {
        $category = $this->find($id);
        $category->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['slug']),
        ]);

        return $category;
    }

    /**
     * Delete a category by ID.
     *
     * 
     */
    public function delete(int $id): void
    {
        $this->find($id)->delete();
    }

    /**
     * Delete multiple categories by IDs.
     *
     *
     */
    public function deleteMultiple(array $ids): void
    {
        Category::whereIn('id', $ids)->delete();
    }

    /**
     * Generate a unique slug for a category.
     *
     * 
     */
    public function generateUniqueSlug(string $name, ?int $excludeId = null): string
    {
        $slug = Str::slug($name ?: 'category');
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}