<?php

namespace App\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $categoryId;
    public $selectedCategories = [];
    public $search = '';
    public $name = '';
    public $slug = '';
    public $sortField = 'id';
    public $sortDirection = 'desc';
    public $selectAllCategories = false;
    public $entries = 10;

    public function updated($propertyName)
    {
        if ($propertyName === 'search') {
            $this->resetPage();
        }
    }

    public function sortBy($field)
    {
        $this->sortField = $field;
        $this->sortDirection = $this->sortField === $field && $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function selectAll()
    {
        $this->selectedCategories = $this->selectAllCategories ? ModelsCategory::pluck('id')->map(fn($id) => (string) $id)->toArray() : [];
    }

    public function updatedSelectedCategories()
    {
        $this->selectAllCategories = count($this->selectedCategories) === ModelsCategory::count() && !empty(ModelsCategory::count());
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|min:3|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
        ]);

        ModelsCategory::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
        ]);

        $this->dispatch('show-toast', message: 'Category created successfully.', type: 'success');
        $this->resetForm();
        $this->dispatch('close-create-modal');
    }

    public function openEdit($id)
    {
        $category = ModelsCategory::findOrFail($id);
        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3|unique:categories,name,' . ($this->categoryId ?: 'NULL') . ',id',
            'slug' => 'required|unique:categories,slug,' . ($this->categoryId ?: 'NULL') . ',id',
        ]);

        $category = ModelsCategory::findOrFail($this->categoryId);
        $category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
        ]);

        $this->dispatch('show-toast', message: 'Category updated successfully.', type: 'success');
        $this->resetForm();
        $this->dispatch('close-edit-modal');
    }

    public function confirmDelete($id)
    {
        $this->dispatch('confirm-delete', id: $id);
    }

    public function confirmDeleteSelected()
    {
        if (!empty($this->selectedCategories)) {
            $this->dispatch('confirm-delete-selected', ids: $this->selectedCategories);
        }
    }

    public function delete($id)
    {
        try {
            ModelsCategory::findOrFail($id)->delete();
            $this->dispatch('show-toast', message: 'Category deleted successfully.', type: 'success');
            $this->selectedCategories = array_diff($this->selectedCategories, [(string) $id]);
            $this->updatedSelectedCategories();
        } catch (\Exception $e) {
            $this->dispatch('show-toast', message: 'Cannot delete category. It may be in use.', type: 'error');
        }
    }

    public function deleteSelected()
    {
        try {
            ModelsCategory::whereIn('id', $this->selectedCategories)->delete();
            $this->dispatch('show-toast', message: 'Selected categories deleted successfully.', type: 'success');
            $this->selectedCategories = [];
            $this->selectAllCategories = false;
        } catch (\Exception $e) {
            $this->dispatch('show-toast', message: 'Cannot delete some categories. They may be in use.', type: 'error');
        }
    }

    public function resetForm()
    {
        $this->name = '';
        $this->slug = '';
        $this->categoryId = null;
        $this->resetValidation(['name', 'slug']);
    }

    public function generateslug()
    {
        $this->slug = $this->generateUniqueSlug($this->name);
    }

    public function generateEditSlug()
    {
        $this->slug = $this->generateUniqueSlug($this->name, $this->categoryId);
    }

    protected function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name ?: 'category');
        $originalSlug = $slug;
        $count = 1;

        while (ModelsCategory::where('slug', $slug)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    public function render()
    {
        $categoriesQuery = ModelsCategory::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . trim($this->search) . '%')
                    ->orWhere('slug', 'like', '%' . trim($this->search) . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection);

        $categories = $this->entries === "all"
            ? $categoriesQuery->get()
            : $categoriesQuery->paginate($this->entries);

        return view('livewire.admin.category', [
            'categories' => $categories
        ]);
    }
}
