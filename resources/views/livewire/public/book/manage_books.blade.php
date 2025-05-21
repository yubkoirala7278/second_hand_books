@extends('livewire.public.master')

@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap ">
            <h2 style="color: var(--deep-teal);">Manage Your Books</h2>
            <a href="{{route('sell-book')}}" class="btn btn-success">Add New Book</a>
        </div>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Book Row 1 -->
                        <tr style="white-space: nowrap">
                            <td>
                                <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=1200" class="book-img" alt="The Great Gatsby Cover"
                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-img-src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=1200">
                            </td>
                            <td>The Great Gatsby</td>
                            <td>F. Scott Fitzgerald</td>
                            <td>$8.00</td>
                            <td>
                                <span class="badge text-bg-success">Available</span></td>
                            <td>
                                <button class="btn-icon btn-edits" title="Edit"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Sold"><i
                                        class="fas fa-check-circle fs-5"></i></button>
                                <button class="btn-icon btn-delete" title="Delete"><i class="fas fa-trash-alt fs-5" ></i></button>
                            </td>
                        </tr>
                        <!-- Book Row 2 -->
                        <tr style="white-space: nowrap">
                            <td>
                                <img src="https://www.publishcentral.com.au/wp-content/uploads/2023/05/book-pile-of-must-read-books-scaled1.jpeg" class="book-img" alt="1984 Cover"
                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-img-src="https://www.publishcentral.com.au/wp-content/uploads/2023/05/book-pile-of-must-read-books-scaled1.jpeg">
                            </td>
                            <td>1984</td>
                            <td>George Orwell</td>
                            <td>$10.00</td>
                            <td><span class="badge text-bg-danger">Sold</span></td>
                            <td>
                                <button class="btn-icon btn-edits" title="Edit"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Available"><i
                                        class="fas fa-undo fs-5 "></i></button>
                                <button class="btn-icon btn-delete" title="Delete"><i class="fas fa-trash-alt fs-5"></i></button>
                            </td>
                        </tr>
                        <!-- Book Row 3 -->
                        <tr style="white-space: nowrap">
                            <td>
                                <img src="https://thumbs.dreamstime.com/b/old-book-flying-letters-magic-light-background-bookshelf-library-ancient-books-as-symbol-knowledge-history-218640948.jpg" class="book-img"
                                    alt="To Kill a Mockingbird Cover" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-img-src="https://thumbs.dreamstime.com/b/old-book-flying-letters-magic-light-background-bookshelf-library-ancient-books-as-symbol-knowledge-history-218640948.jpg">
                            </td>
                            <td>To Kill a Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>$7.50</td>
                            <td>  <span class="badge text-bg-success">Available</span></td>
                            <td>
                                <button class="btn-icon btn-edits" title="Edit"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Sold"><i
                                        class="fas fa-check-circle fs-5"></i></button>
                                <button class="btn-icon btn-delete" title="Delete"><i class="fas fa-trash-alt fs-5"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Book Cover</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="modal-img" id="modalImage" alt="Book Cover">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // Update modal image source when clicking on table image
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('imageModal');
            modal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const imgSrc = button.getAttribute('data-img-src');
                const modalImg = modal.querySelector('#modalImage');
                modalImg.src = imgSrc;
            });
        });
    </script>
@endpush
