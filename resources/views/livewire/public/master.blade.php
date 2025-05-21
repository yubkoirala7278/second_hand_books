<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="BookShelf - A professional marketplace to buy and sell second-hand books, textbooks, and study materials.">
    <title>BookShelf - Book Marketplace</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous">
    <!-- Google Fonts: Lora & Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/style.css') }}">

    {{-- Custom Header Content --}}
    @yield('header-content')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container navbar-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://sajhakitab.com/wp-content/uploads/2021/01/Untitled-1-1.png" alt="BookShelf Logo"
                    class="img-fluid" style="max-height: 60px;" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('book') ? 'active' : '' }}"
                            href="{{ route('book') }}">Buy Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sell-book') ? 'active' : '' }}"
                            href="{{ route('sell-book') }}">Sell Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('manage-books') ? 'active' : '' }}"
                            href="{{ route('manage-books') }}">Manage Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative d-flex align-items-center text-white rounded-2 btn-login"
                            href="{{ route('chat') }}" >
                            <i class="fas fa-comments me-1"></i>
                            <span class="inbox-text d-none d-lg-inline">Inbox</span>
                            <span
                                class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        @livewire('login-component')
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}
    @yield('content')
    @livewireScripts
    @stack('scripts')

    <!-- Footer Section -->
    <footer class="footer-section py-5">
        <div class="container">
            <div class="row g-4">
                <!-- About Section -->
                <div class="col-12 col-md-4 col-lg-3">
                    <h5 class="mb-3" style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">
                        Book Haven</h5>
                    <p class="small"
                        style="font-family: 'Poppins', sans-serif; line-height: 1.6; color: var(--charcoal-gray);">
                        Discover, buy, or sell books, novels, and study notes. Join our community to share your love for
                        reading and learning!
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="social-icon" aria-label="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="col-12 col-md-4 col-lg-3">
                    <h5 class="mb-3" style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">
                        Quick Links</h5>
                    <ul class="list-unstyled" style="font-family: 'Poppins', sans-serif;">
                        <li class="mb-2"><a href="/buy" class="text-decoration-none hover-link"
                                style="color: var(--charcoal-gray);">Buy Books</a></li>
                        <li class="mb-2"><a href="/sell" class="text-decoration-none hover-link"
                                style="color: var(--charcoal-gray);">Sell Books</a></li>
                        <li class="mb-2"><a href="/novels" class="text-decoration-none hover-link"
                                style="color: var(--charcoal-gray);">Explore Novels</a></li>
                        <li class="mb-2"><a href="/notes" class="text-decoration-none hover-link"
                                style="color: var(--charcoal-gray);">Study Notes</a></li>
                        <li><a href="/about" class="text-decoration-none hover-link"
                                style="color: var(--charcoal-gray);">About Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-12 col-md-4 col-lg-3">
                    <h5 class="mb-3" style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">
                        Contact Us</h5>
                    <ul class="list-unstyled small"
                        style="font-family: 'Poppins', sans-serif; color: var(--charcoal-gray);">
                        <li class="mb-2"><i class="fas fa-envelope me-2" style="color: var(--coral);"></i>
                            support@bookhaven.com</li>
                        <li class="mb-2"><i class="fas fa-phone-alt me-2" style="color: var(--coral);"></i> +1
                            (555) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt me-2" style="color: var(--coral);"></i> 123 Library Lane,
                            Booktown, USA</li>
                    </ul>
                </div>

                <!-- Call to Action -->
                <div class="col-12 col-lg-3">
                    <h5 class="mb-3" style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">
                        Start Trading Now!</h5>
                    <p class="small mb-3" style="font-family: 'Poppins', sans-serif; color: var(--charcoal-gray);">
                        List your books or notes for sale or find your next great read today.
                    </p>
                    <a href="/sell" class="btn btn-cta d-inline-flex align-items-center gap-2 px-4 py-2 text-white"
                        style="font-family: 'Poppins', sans-serif;">
                        Sell Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(51, 63, 72, 0.2);">
            <div class="text-center small" style="font-family: 'Poppins', sans-serif; color: var(--charcoal-gray);">
                © 2025 Book Haven. All rights reserved.
            </div>
        </div>
    </footer>


    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    @stack('script')
</body>

</html>
