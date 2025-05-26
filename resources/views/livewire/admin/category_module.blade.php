@extends('livewire.admin.master')

@section('content')
    <div class="container-fluid py-4">
        <div class="row ">
            <div class="col-12">
                <div class="card border-0 shadow-lg rounded-lg">
                    <div
                        class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0"><i class="fas fa-list mr-2"></i>Manage Categories</h3>
                        <div class=" d-flex align-items-center  justify-content-end flex-grow-1">
                            <button class="btn btn-light mr-2" {{ empty($selectedCategories) ? 'disabled' : '' }}
                                wire:click="confirmDeleteSelected">
                                <i class="fas fa-trash-alt mr-1"></i> Delete Selected
                            </button>
                            <button class="btn btn-light" data-toggle="modal" data-target="#createCategoryModal">
                                <i class="fas fa-plus-circle mr-1"></i> Add Category
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 d-flex align-items-center  justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="mr-1">Show</span>
                                <select class="form-select form-select-sm mr-1" wire:model.live.debounce.500ms="entries">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="all">All</option>
                                </select>
                                <span>Data</span>
                            </div>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search by name or slug"
                                        wire:model.live.debounce.250ms="search">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" style="width: 5%">
                                            <input type="checkbox" wire:model="selectAllCategories" wire:change="selectAll">
                                        </th>
                                        <th class="text-center" style="width: 10%" wire:click="sortBy('id')">
                                            SN
                                        </th>
                                        <th style="width: 30%" wire:click="sortBy('name')">
                                            Name
                                            <i class="fas fa-sort"></i>
                                        </th>
                                        <th style="width: 30%" wire:click="sortBy('slug')">
                                            Slug
                                            <i class="fas fa-sort"></i>
                                        </th>
                                        <th style="width: 15%" wire:click="sortBy('created_at')">
                                            Created At
                                            <i class="fas fa-sort"></i>
                                        </th>
                                        <th class="text-center" style="width: 10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $key=>$category)
                                        <tr wire:key="{{ $key }}">
                                            <td class="text-center">
                                                <input type="checkbox" wire:model.live="selectedCategories"
                                                    value="{{ $category->id }}">
                                            </td>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->created_at->format('d M Y') }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-warning mr-1 text-white" data-toggle="modal"
                                                    data-target="#editCategoryModal"
                                                    wire:click="openEdit({{ $category->id }})">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger"
                                                    wire:click="confirmDelete({{ $category->id }})">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">No categories found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                @if ($entries != 'all')
                                    {{ $categories->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog"
        aria-labelledby="createCategoryModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white">
                    <h4 class="modal-title" id="createCategoryModalLabel"><i class="fas fa-plus-circle mr-2"></i>Add
                        Category</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"
                        wire:click="resetForm">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="createName"><i class="fas fa-tag mr-1"></i>Category Name</label>
                            <input type="text" class="form-control" id="createName" wire:model="name"
                                placeholder="Enter category name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="createSlug"><i class="fas fa-link mr-1"></i>Slug</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="createSlug" wire:model="slug"
                                    placeholder="Enter slug">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="button" wire:click="generateslug"><i
                                            class="fas fa-magic"></i> Generate</button>
                                </div>
                            </div>
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetForm"><i
                            class="fas fa-times mr-1"></i>Close</button>
                    <button type="button" class="btn btn-primary" wire:click="create"><i
                            class="fas fa-save mr-1"></i>Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog"
        aria-labelledby="editCategoryModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-warning text-dark">
                    <h4 class="modal-title" id="editCategoryModalLabel"><i class="fas fa-edit mr-2"></i>Edit Category
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        wire:click="resetForm">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="editName"><i class="fas fa-tag mr-1"></i>Category Name</label>
                            <input type="text" class="form-control" id="editName" wire:model="name"
                                placeholder="Enter category name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="editSlug"><i class="fas fa-link mr-1"></i>Slug</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="editSlug" wire:model="slug"
                                    placeholder="Enter slug">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning" type="button" wire:click="generateslug"><i
                                            class="fas fa-magic"></i> Generate</button>
                                </div>
                            </div>
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetForm"><i
                            class="fas fa-times mr-1"></i>Close</button>
                    <button type="button" class="btn btn-warning" wire:click="update"><i
                            class="fas fa-save mr-1"></i>Save</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(210, 191, 191, 0.3);
            border: none;
        }
    </style>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('close-create-modal', () => {
                $('#createCategoryModal').modal('hide');
            });
            Livewire.on('close-edit-modal', () => {
                $('#editCategoryModal').modal('hide');
            });
            Livewire.on('show-toast', (event) => {
                Toastify({
                    text: event.message,
                    duration: 3000,
                    gravity: 'top',
                    position: 'right',
                    backgroundColor: event.type === 'success' ? '#28a745' : '#dc3545',
                    stopOnFocus: true,
                }).showToast();
            });
            Livewire.on('confirm-delete', (event) => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: '<i class="fas fa-trash mr-1"></i> Delete',
                    cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('delete', event.id);
                    }
                });
            });
            Livewire.on('confirm-delete-selected', (event) => {
                Swal.fire({
                    title: 'Delete Selected Categories?',
                    text: `You are about to delete ${event.ids.length} category(ies). This cannot be undone!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: '<i class="fas fa-trash mr-1"></i> Delete',
                    cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('deleteSelected');
                    }
                });
            });
        });
    </script>
@endpush
