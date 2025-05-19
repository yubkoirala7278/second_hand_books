@extends('livewire.public.master')

@section('header-content')
    <!-- Splide.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
@endsection

@section('content')
    <!-- Main Content -->
    <main class="book-detail-section">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/books"
                            style="color: var(--deep-teal); text-decoration: none;">Books</a></li>
                    <li class="breadcrumb-item"><a href="/books?category=bachelor"
                            style="color: var(--deep-teal); text-decoration: none;">Bachelor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Introduction to Sociology</li>
                </ol>
            </nav>

            <!-- Book Details -->
            <div class="row g-4">
                <!-- Book Image Carousel -->
                <div class="col-12 col-lg-5">
                    <!-- Main Carousel -->
                    <div class="book-carousel splide" id="main-carousel">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
                                        alt="Introduction to Sociology - Image 1">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                                        alt="Introduction to Sociology - Image 2">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e"
                                        alt="Introduction to Sociology - Image 3">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Thumbnail Carousel -->
                    {{-- <div class="thumbnail-carousel splide mt-2" id="thumbnail-carousel">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" alt="Thumbnail 1">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                                        alt="Thumbnail 2">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e" alt="Thumbnail 3">
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <!-- Book Info -->
                <div class="col-12 col-lg-7">
                    <h1 class="book-title mb-2" style="font-size: 2.25rem;">Introduction to Sociology</h1>
                    <p class="price mb-3">$25 <span class="text-muted fw-normal">(Used)</span></p>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="category-badge">BACHELOR</span>
                        <span class="category-badge">Textbook</span>
                    </div>
                    <div class="mb-4">
                        <p class="small text-muted mb-1"><i class="fas fa-map-marker-alt me-1"></i>New York, NY</p>
                        <p class="small text-muted mb-1"><i class="fas fa-calendar-alt me-1"></i>Posted on 2025-05-15</p>
                        <p class="small text-muted"><i class="fas fa-eye me-1"></i>120 Views</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="/message/seller/123" class="btn btn-action"><i class="fas fa-envelope me-2"></i>Send
                            Message</a>
                        <a href="tel:+15551234567" class="btn btn-action"><i class="fas fa-phone-alt me-2"></i>Call Now</a>
                        <button class="btn btn-secondary-action" disabled><i class="far fa-heart me-2"></i>Add to
                            Wishlist</button>
                    </div>
                    <!-- Share and Report -->
                    <div class="d-flex align-items-center gap-3">
                        <div class="share-icons d-flex gap-2">
                            <a href="#" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Share on Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" aria-label="Copy Link"><i class="fas fa-link"></i></a>
                        </div>
                        <a href="/report/book/123" class="report-link"><i class="fas fa-flag me-1"></i>Report Listing</a>
                    </div>
                </div>
            </div>

            <!-- Description and Seller Info -->
            <div class="row g-4 mt-4">
                <!-- Description -->
                <div class="col-12 col-lg-8">
                    <h3 style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">Description</h3>
                    <p style="line-height: 1.6;">
                        This is a gently used copy of "Introduction to Sociology," perfect for Bachelor-level students. The
                        book covers key sociological concepts, theories, and case studies. No highlights or markings, but
                        minor wear on the cover. Ideal for anyone looking to dive into sociology at an affordable price.
                    </p>
                    <h5 style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal); margin-top: 2rem;">
                        Book Details</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><strong>Condition:</strong> Used (minor cover wear)</li>
                        <li class="mb-2"><strong>Edition:</strong> 3rd Edition, 2020</li>
                        <li class="mb-2"><strong>Author:</strong> John Smith</li>
                        <li><strong>ISBN:</strong> 978-1234567890</li>
                    </ul>
                </div>
                <!-- Seller Info -->
                <div class="col-12 col-lg-4">
                    <div class="seller-card">
                        <h5 style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">Posted By</h5>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740" class="rounded-circle" alt="Seller Avatar" height="50">
                            <div>
                                <h6 class="mb-0" style="color: var(--charcoal-gray);">Jane Doe</h6>
                                <p class="small text-muted mb-0">Member since 2023</p>
                            </div>
                        </div>
                        <p class="small" style="line-height: 1.6;">
                            I'm a sociology student at NYU, selling textbooks I no longer need. All my books are
                            well-maintained, and I'm happy to answer any questions!
                        </p>
                        <a href="/profile/123" class="text-decoration-none" style="color: var(--coral);">View Seller
                            Profile</a>
                    </div>
                </div>
            </div>

            <!-- Location Map -->
            <div class="mt-5">
                <h3 style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">Location</h3>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.241264863091!2d-73.99625068459374!3d40.72951397932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a4051f6!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2snp!4v1667506273886!5m2!1sen!2snp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Similar Books -->
            <section class="novels-section py-5">
                <div class="container">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 gap-3">
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
                                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
                                        class="card-img-top" alt="Introduction to Sociology" loading="lazy">
                                    <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                            class="far fa-heart"></i></button>
                                    <span class="category-badge">BACHELOR</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"
                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                        Introduction to Sociology</h5>
                                    <p class="card-text text-muted mb-1 small"><i
                                            class="fas fa-map-marker-alt me-1"></i>New York,
                                        NY</p>
                                    <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$25
                                        <span class="text-muted fw-normal">(Used)</span></p>
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
                                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                                        class="card-img-top" alt="The Midnight Library" loading="lazy">
                                    <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                            class="far fa-heart"></i></button>
                                    <span class="category-badge">FICTION</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"
                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                        The
                                        Midnight Library</h5>
                                    <p class="card-text text-muted mb-1 small"><i
                                            class="fas fa-map-marker-alt me-1"></i>San
                                        Francisco, CA</p>
                                    <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$18
                                        <span class="text-muted fw-normal">(New)</span></p>
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
                                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
                                        class="card-img-top" alt="Calculus Made Easy" loading="lazy">
                                    <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                            class="far fa-heart"></i></button>
                                    <span class="category-badge">+2</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"
                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                        Calculus Made Easy</h5>
                                    <p class="card-text text-muted mb-1 small"><i
                                            class="fas fa-map-marker-alt me-1"></i>Chicago,
                                        IL</p>
                                    <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$30
                                        <span class="text-muted fw-normal">(Like New)</span></p>
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
                                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                                        class="card-img-top" alt="Pride and Prejudice" loading="lazy">
                                    <button class="wishlist-btn" aria-label="Add to Wishlist"><i
                                            class="far fa-heart"></i></button>
                                    <span class="category-badge">FICTION</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"
                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                        Pride and Prejudice</h5>
                                    <p class="card-text text-muted mb-1 small"><i
                                            class="fas fa-map-marker-alt me-1"></i>Miami, FL
                                    </p>
                                    <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$12
                                        <span class="text-muted fw-normal">(Used)</span></p>
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
        </div>
    </main>
@endsection

@push('script')
    <!-- Splide.js JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        // Initialize Main Carousel with Auto Scroll
        new Splide('#main-carousel', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: 3000,
            pauseOnHover: true,
            arrows: true,
            pagination: true,
            gap: 10,
            height: '400px'
        }).mount();

        // Initialize Thumbnail Carousel
        new Splide('#thumbnail-carousel', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: 10,
            pagination: false,
            arrows: false,
            fixedWidth: '100px',
            fixedHeight: '80px',
            isNavigation: true,
            breakpoints: {
                767: {
                    perPage: 2,
                    fixedWidth: '80px',
                    fixedHeight: '60px'
                }
            }
        }).mount();
    </script>
@endpush
