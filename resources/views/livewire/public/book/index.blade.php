@extends('livewire.public.master')
@section('content')
    <!-- Main Content -->
    <main class="container my-4">
        <!-- Filter Section -->
        <section class="filter-section">
            <form action="/books" method="GET">
                <div class="row g-3">
                    <!-- Keyword Search -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="keyword" class="form-label">Search by Keyword</label>
                        <input type="text" class="form-control" id="keyword" name="keyword"
                            placeholder="e.g., Sociology, Fiction">
                    </div>
                    <!-- Sort By -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="sort" class="form-label">Sort By</label>
                        <select class="form-select" id="sort" name="sort">
                            <option value="newest">Newest to Oldest</option>
                            <option value="oldest">Oldest to Newest</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="price-low">Price: Low to High</option>
                        </select>
                    </div>
                    <!-- Category -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">All Categories</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="a-level">A Level</option>
                            <option value="+2">+2</option>
                            <option value="fiction">Fiction</option>
                            <option value="non-fiction">Non-Fiction</option>
                        </select>
                    </div>
                    <!-- Price Range -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="price-range" class="form-label">Price Range</label>
                        <div class="d-flex align-items-center gap-2">
                            <input type="number" class="form-control" id="price-min" name="price_min" placeholder="Min"
                                min="0">
                            <span>-</span>
                            <input type="number" class="form-control" id="price-max" name="price_max" placeholder="Max"
                                min="0">
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                            placeholder="e.g., New York, NY">
                    </div>
                    <!-- Condition -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="condition" class="form-label">Book Condition</label>
                        <select class="form-select" id="condition" name="condition">
                            <option value="">All Conditions</option>
                            <option value="new">New</option>
                            <option value="like-new">Like New</option>
                            <option value="used">Used</option>
                        </select>
                    </div>
                    <!-- Filter and Reset Buttons -->
                    <div class="col-12 d-flex gap-3 justify-content-end">
                        <a href="/books" class="btn btn-reset">Reset Filters</a>
                        <button type="submit" class="btn btn-filter">Apply Filters</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- Books Listing -->
        <section class="books-listing">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <!-- Book Card 1 -->
                <div class="col">
                    <a href="/book-details/1" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i class="far fa-heart"></i></button>
                            <span class="category-badge">BACHELOR</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Introduction to Sociology</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>New York,
                                NY</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$25 <span
                                    class="text-muted fw-normal">(Used)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-15</span>
                                <span><i class="fas fa-eye me-1"></i>120 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 2 -->
                <div class="col">
                    <a href="/book-details/2" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="The Midnight Library" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">The
                                Midnight Library</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>San
                                Francisco, CA</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$18 <span
                                    class="text-muted fw-normal">(New)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-10</span>
                                <span><i class="fas fa-eye me-1"></i>85 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 3 -->
                <div class="col">
                    <a href="/book-details/3" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Calculus Made Easy" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">+2</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Calculus Made Easy</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Chicago,
                                IL</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$30 <span
                                    class="text-muted fw-normal">(Like New)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-12</span>
                                <span><i class="fas fa-eye me-1"></i>95 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 4 -->
                <div class="col">
                    <a href="/book-details/4" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="Pride and Prejudice" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Pride and Prejudice</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Miami, FL
                            </p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$12 <span
                                    class="text-muted fw-normal">(Used)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-14</span>
                                <span><i class="fas fa-eye me-1"></i>75 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 5 -->
                <div class="col">
                    <a href="/book-details/5" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Physics for A Level" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">A-LEVEL</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Physics for A Level</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Boston,
                                MA</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$40 <span
                                    class="text-muted fw-normal">(New)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-08</span>
                                <span><i class="fas fa-eye me-1"></i>110 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 6 -->
                <div class="col">
                    <a href="/book-details/6" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="To Kill a Mockingbird" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">To
                                Kill a Mockingbird</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Seattle,
                                WA</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$15 <span
                                    class="text-muted fw-normal">(Like New)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-11</span>
                                <span><i class="fas fa-eye me-1"></i>90 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 7 -->
                <div class="col">
                    <a href="/book-details/7" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Organic Chemistry" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">BACHELOR</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Organic Chemistry</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Los
                                Angeles, CA</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$35 <span
                                    class="text-muted fw-normal">(Used)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-09</span>
                                <span><i class="fas fa-eye me-1"></i>100 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 8 -->
                <div class="col">
                    <a href="/book-details/8" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="1984" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">1984
                            </h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Portland,
                                OR</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$10 <span
                                    class="text-muted fw-normal">(Used)</span></p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-13</span>
                                <span><i class="fas fa-eye me-1"></i>80 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        <nav aria-label="Book pagination" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/books?page=2">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/books?page=3">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/books?page=2">Next</a>
                </li>
            </ul>
        </nav>
    </main>
@endsection
