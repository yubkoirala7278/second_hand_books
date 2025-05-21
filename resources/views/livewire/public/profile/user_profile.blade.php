@extends('livewire.public.master')
@section('content')
    <!-- Main Content -->
    <main class="profile-section">
        <div class="container">
            <!-- Profile Overview -->
            <div class="profile-card mb-5">
                <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                    <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                        class="profile-avatar" alt="User Avatar">
                    <div class="flex-grow-1">
                        <h2 style="font-family: 'Lora', serif; font-weight: 600; color: var(--deep-teal);">Jane Doe</h2>
                        <p class="text-muted mb-1"><i class="fas fa-envelope me-2"></i>jane.doe@example.com</p>
                        <p class="text-muted mb-1"><i class="fas fa-phone-alt me-2"></i>+977 1234567890</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt me-2"></i>123 Library Lane, Kathmandu</p>
                        <p class="mt-2" style="line-height: 1.6;">Sociology student at TU, passionate about books and
                            sustainable trading. Joined in January 2023.</p>
                    </div>
                    <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i
                            class="fas fa-edit me-2"></i>Edit Profile</button>
                </div>
            </div>

            <!-- Stats Overview -->
            <h3 class="section-title">Your Stats</h3>
            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-shopping-cart"></i>
                        <h5 class="mb-1">12</h5>
                        <p>Total Purchases</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-dollar-sign"></i>
                        <h5 class="mb-1">25</h5>
                        <p>Total Sales</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-upload"></i>
                        <h5 class="mb-1">30</h5>
                        <p>Books Uploaded</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-hourglass-half"></i>
                        <h5 class="mb-1">5</h5>
                        <p>Pending Listings</p>
                    </div>
                </div>
            </div>

            <!-- Your Current Listing -->
            <h3 class="section-title">Your Current Listings</h3>
            <div class="row g-4 mb-5 justify-content-center">
                <!-- Book Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Introduction to Sociology" loading="lazy">
                            <span class="category-badge">BACHELOR</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Introduction to Sociology</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>New
                                York,
                                NY</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$25
                                <span class="text-muted fw-normal">(Used)</span>
                            </p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-15</span>
                                <span><i class="fas fa-eye me-1"></i>120 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="The Midnight Library" loading="lazy">
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                The
                                Midnight Library</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>San
                                Francisco, CA</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$18
                                <span class="text-muted fw-normal">(New)</span>
                            </p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-10</span>
                                <span><i class="fas fa-eye me-1"></i>85 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f" class="card-img-top"
                                alt="Calculus Made Easy" loading="lazy">
                            <span class="category-badge">+2</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Calculus Made Easy</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Chicago,
                                IL</p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$30
                                <span class="text-muted fw-normal">(Like New)</span>
                            </p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-12</span>
                                <span><i class="fas fa-eye me-1"></i>95 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Book Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" class="card book-card h-100 text-decoration-none">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top"
                                alt="Pride and Prejudice" loading="lazy">
                            <span class="category-badge">FICTION</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"
                                style="font-family: 'Poppins', sans-serif; font-weight: 500; color: var(--deep-teal);">
                                Pride and Prejudice</h5>
                            <p class="card-text text-muted mb-1 small"><i class="fas fa-map-marker-alt me-1"></i>Miami, FL
                            </p>
                            <p class="card-text price mb-1" style="font-size: 1.1rem; color: var(--coral);">$12
                                <span class="text-muted fw-normal">(Used)</span>
                            </p>
                            <div class="d-flex justify-content-between text-muted small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2025-05-14</span>
                                <span><i class="fas fa-eye me-1"></i>75 Views</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Recent Activity -->
            <h3 class="section-title">Recent Activity</h3>
            <div class="timeline">
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-upload text-success"></i>
                        <div>
                            <p class="mb-0" style="font-weight: 500;">Uploaded "Introduction to Sociology"</p>
                            <p class="small text-muted mb-0">2025-05-15</p>
                        </div>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <div>
                            <p class="mb-0" style="font-weight: 500;">Purchased "The Midnight Library"</p>
                            <p class="small text-muted mb-0">2025-05-10</p>
                        </div>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-dollar-sign text-success"></i>
                        <div>
                            <p class="mb-0" style="font-weight: 500;">Sold "Calculus Made Easy"</p>
                            <p class="small text-muted mb-0">2025-05-08</p>
                        </div>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-hourglass-half text-warning"></i>
                        <div>
                            <p class="mb-0" style="font-weight: 500;">Listing "Pride and Prejudice" pending approval</p>
                            <p class="small text-muted mb-0">2025-05-07</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel"
                        style="font-family: 'Lora', serif; font-weight: 600;">Edit Profile</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/profile/update" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-12 col-md-6">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="Jane Doe" required>
                            </div>
                            <!-- Email -->
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="jane.doe@example.com" required>
                            </div>
                            <!-- Mobile Number -->
                            <div class="col-12 col-md-6">
                                <label for="mobile" class="form-label">Mobile Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="mobile" name="mobile"
                                    value="+977 1234567890" required>
                            </div>
                            <!-- Address -->
                            <div class="col-12 col-md-6">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="123 Library Lane, Kathmandu" required>
                            </div>
                            <!-- Bio -->
                            <div class="col-12">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea class="form-control" id="bio" name="bio" rows="4">Sociology student at TU, passionate about books and sustainable trading. Joined in January 2023.</textarea>
                            </div>
                            <!-- Profile Picture -->
                            <div class="col-12">
                                <label for="avatar" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="avatar" name="avatar"
                                    accept="image/*">
                                <p class="small text-muted mt-1">JPG, PNG, max 2MB</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 justify-content-end mt-4">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-save">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
