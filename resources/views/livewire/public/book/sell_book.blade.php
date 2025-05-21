@extends('livewire.public.master')

@section('header-content')
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- Main Content -->
    <main class="sell-book-section">
        <div class="container">
            <div class="form-card">
                <form action="/books/store" method="POST" enctype="multipart/form-data">
                    <!-- Book Details -->
                    <h3 class="form-section-title">Book Details</h3>
                    <div class="row g-3">
                        <!-- Book Title -->
                        <div class="col-12">
                            <label for="title" class="form-label">Book Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="e.g., Introduction to Sociology" required>
                        </div>
                        <!-- Category -->
                        <div class="col-12 col-md-6">
                            <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="" disabled selected>Select Category</option>
                                <option value="bachelors">Bachelors</option>
                                <option value="ctevt">CTEVT</option>
                                <option value="entrance-prep">Entrance Preparation</option>
                                <option value="fiction">Fiction</option>
                                <option value="non-fiction">Non-Fiction</option>
                                <option value="+2">+2</option>
                                <option value="a-level">A Level</option>
                            </select>
                        </div>
                        <!-- Item Condition -->
                        <div class="col-12 col-md-6">
                            <label for="condition" class="form-label">Item Condition <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="condition" name="condition" required>
                                <option value="" disabled selected>Select Condition</option>
                                <option value="new">New</option>
                                <option value="like-new">Like New</option>
                                <option value="second-hand">Second Hand</option>
                                <option value="old">Old</option>
                            </select>
                        </div>
                        <!-- Price Type -->
                        <div class="col-12 col-md-6">
                            <label for="price_type" class="form-label">Price Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="price_type" name="price_type" required>
                                <option value="" disabled selected>Select Price Type</option>
                                <option value="fixed">Fixed</option>
                                <option value="negotiable">Negotiable</option>
                            </select>
                        </div>
                        <!-- Currency and Price -->
                        <div class="col-12 col-md-6">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-select" id="currency" name="currency" style="max-width: 100px;"
                                    required>
                                    <option value="NRS">NRS</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                </select>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="e.g., 500" min="0" step="0.01" required>
                            </div>
                        </div>
                        <!-- Original Price -->
                        <div class="col-12 col-md-6">
                            <label for="original_price" class="form-label">Original Price (Optional)</label>
                            <input type="number" class="form-control" id="original_price" name="original_price"
                                placeholder="e.g., 1000" min="0" step="0.01">
                        </div>
                        <!-- Description -->
                        <div class="col-12">
                            <label for="description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Describe the book, its condition, and any relevant details..."
                                id="description" name="description">{{ old('description') }}</textarea>
                        </div>
                        <!-- Image Upload -->
                        <div class="col-12">
                            <label for="images" class="form-label">Upload Images (Up to 5) <span
                                    class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*"
                                multiple required>
                        </div>
                    </div>

                    <!-- Seller Details -->
                    <h3 class="form-section-title mt-5">Seller Details</h3>
                    <div class="row g-3">
                        <!-- Seller Name -->
                        <div class="col-12 col-md-6">
                            <label for="seller_name" class="form-label">Seller Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="seller_name" name="seller_name"
                                placeholder="e.g., John Doe" required>
                        </div>
                        <!-- Seller Mobile Number -->
                        <div class="col-12 col-md-6">
                            <label for="seller_mobile" class="form-label">Mobile Number <span
                                    class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="seller_mobile" name="seller_mobile"
                                placeholder="e.g., +977 1234567890" required>
                        </div>
                        <!-- Address -->
                        <div class="col-12">
                            <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="e.g., 123 Library Lane, Kathmandu" required>
                        </div>
                        <!-- Google Map Link -->
                        <div class="col-12">
                            <label for="map_link" class="form-label">Google Map Link (Optional)</label>
                            <input type="url" class="form-control" id="map_link" name="map_link"
                                placeholder="e.g., https://maps.google.com/...">
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="d-flex gap-3 justify-content-end mt-4">
                        <a href="/books" class="btn btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-submit">List Book</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#description'), {
                    removePlugins: ['Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload',
                        'Indent', 'ImageUpload', 'MediaEmbed'
                    ]
                });
        });
    </script>
@endpush
