@extends('livewire.public.master')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-container">
            <div class="hero-text">
                <h1>Buy and Sell Quality Books</h1>
                <p>Discover a curated selection of second-hand textbooks, novels, and study materials. Join our
                    community to buy or sell with ease.</p>
                <a href="/listings" class="btn btn-hero">Explore Books</a>
            </div>
            <div class="hero-form">
                <h3>Find Your Book</h3>
                <form action="/search" method="GET">
                    <div class="form-group text-start">
                        <label for="title">Book Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter book title" required>
                    </div>
                    <div class="form-group text-start">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="fiction">Fiction</option>
                            <option value="non-fiction">Non-Fiction</option>
                            <option value="textbooks">Textbooks</option>
                            <option value="study-notes">Study Notes</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group text-start">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" placeholder="Enter city or zip code">
                    </div>
                    <button type="submit" class="btn btn-search text-white">Search Books</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Books Listing Section Bachelores Levels -->
    <section class="books-section py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
                <h2 class="text-center mb-0"
                    style="font-family: 'Lora', serif; font-weight: 600; font-size: 2.25rem; color: #2c3e50;">
                    Bachelores Books
                </h2>
                <a href="/novels"
                    class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 px-3 py-2 text-white view-all-btn mx-auto mx-md-0">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
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
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i class="far fa-heart"></i></button>
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
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i class="far fa-heart"></i></button>
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
            </div>
        </div>
    </section>

    <!-- Novels Section -->
    <section class="novels-section py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
                <h2 class="text-center mb-0"
                    style="font-family: 'Lora', serif; font-weight: 600; font-size: 2.25rem; color: #2c3e50;">
                    Discover Our Novels
                </h2>
                <a href="/novels"
                    class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 px-3 py-2 text-white view-all-btn mx-auto mx-md-0">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <!-- Book Card 1 -->
                <div class="col">
                    <a href="/book-details/1" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
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
            </div>
        </div>
    </section>

    <!-- Books Listing Section +2 Levels -->
    <section class="books-section py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
                <h2 class="text-center mb-0"
                    style="font-family: 'Lora', serif; font-weight: 600; font-size: 2.25rem; color: #2c3e50;">
                    +2 Books
                </h2>
                <a href="/novels"
                    class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 px-3 py-2 text-white view-all-btn mx-auto mx-md-0">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <!-- Book Card 1 -->
                <div class="col">
                    <a href="/book-details/1" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
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
            </div>
        </div>
    </section>

    <!-- Entrance Preparation Books -->
    <section class="novels-section py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
                <h2 class="text-center mb-0"
                    style="font-family: 'Lora', serif; font-weight: 600; font-size: 2.25rem; color: #2c3e50;">
                    Entrance Preparation Books
                </h2>
                <a href="/novels"
                    class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 px-3 py-2 text-white view-all-btn mx-auto mx-md-0">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <!-- Book Card 1 -->
                <div class="col">
                    <a href="/book-details/1" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
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
            </div>
        </div>
    </section>

    <!-- School Books -->
    <section class="books-section py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
                <h2 class="text-center mb-0"
                    style="font-family: 'Lora', serif; font-weight: 600; font-size: 2.25rem; color: #2c3e50;">
                    School Books
                </h2>
                <a href="/novels"
                    class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 px-3 py-2 text-white view-all-btn mx-auto mx-md-0">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <!-- Book Card 1 -->
                <div class="col">
                    <a href="/book-details/1" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                    class="far fa-heart"></i></button>
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
            </div>
        </div>
    </section>
@endsection
