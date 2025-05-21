<div>
    @if (Auth::check())
        <!-- Profile Dropdown for Logged-In User -->
        <div class="dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ Auth::user()->profile_image }}" alt="Profile Image" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user me-2"></i> My Profile</a></li>
                <li><a class="dropdown-item" href="#" wire:click="logout"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
            </ul>
        </div>
    @else
        <!-- Login Button for Guests -->
        <a href="#" wire:click="openGoogleLoginPopup" class="nav-link btn btn-login px-3 py-2" wire:loading.attr="disabled">
            <i class="fab fa-google me-2"></i>
            <span wire:loading.remove>Login with Google</span>
            <span wire:loading>Loading...</span>
        </a>
    @endif

    @push('scripts')
    <script>
        document.addEventListener('livewire:init', function () {
            Livewire.on('openGoogleLoginPopup', () => {
                const popup = window.open(
                    '{{ route("auth.google") }}',
                    'googleLoginPopup',
                    'width=600,height=600,menubar=no,toolbar=no,location=no'
                );
                const checkPopupClosed = setInterval(() => {
                    if (popup && popup.closed) {
                        clearInterval(checkPopupClosed);
                        window.location.reload();
                    }
                }, 500);
            });
        });
    </script>
    @endpush
</div>