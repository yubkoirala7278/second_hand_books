@extends('livewire.public.master')

@section('header-content')
 <style>
        :root {
            --navy-blue: #1e3a8a;
            --soft-gray: #f4f6f9;
            --amber: #f59e0b;
            --charcoal-gray: #1f2937;
            --light-border: #e5e7eb;
        }

        .list-group-item {
            transition: background-color 0.2s ease, transform 0.1s ease;
            border-color: var(--light-border);
        }

        .list-group-item:hover {
            background-color: #f9fafb;
            transform: translateX(4px);
        }

        .list-group-item.active {
            background-color: rgba(31, 41, 55, 0.05);
            border-color: var(--light-border);
            color: var(--charcoal-gray);
        }

        .list-group-item h6 {
            color: var(--charcoal-gray);
        }

        .list-group-item p {
            color: #6b7280;
        }

        .badge {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.35rem 0.75rem;
        }

        /* Custom Scrollbar */
        .list-group::-webkit-scrollbar {
            width: 6px;
        }

        .list-group::-webkit-scrollbar-track {
            background: var(--soft-gray);
            border-radius: 3px;
        }

        .list-group::-webkit-scrollbar-thumb {
            background: #9ca3af;
            border-radius: 3px;
        }

        .list-group::-webkit-scrollbar-thumb:hover {
            background: var(--charcoal-gray);
        }

        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .list-group-item {
                padding: 0.75rem;
            }

            .list-group-item img {
                width: 40px;
                height: 40px;
            }

            .list-group-item h6 {
                font-size: 0.95rem;
            }

            .list-group-item p {
                font-size: 0.85rem;
            }

            .badge {
                font-size: 0.7rem;
                padding: 0.3rem 0.6rem;
            }

            .card-header h5 {
                font-size: 1.1rem;
            }
        }
       
    </style>
@endsection

@section('content')
    <div class="px-3" style="background-color: #f4f6f9;">
        <div class=" py-4 py-md-5">
            <div class="card border-0 shadow-lg rounded-4 ">
                <div class="card-header py-3" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                    <h5 class="mb-0 fw-semibold text-white">Conversations</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush  overflow-x-hidden overflow-y:scroll" style="max-height: 500px; ">
                        <!-- User Item -->
                        <a href="{{ url('/chat/conversation?user=1') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '1' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">John Doe</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">2h ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small ">Can you give me a discount?</p>
                            </div>
                            <span class="badge rounded-pill ms-3" style="background-color: #f59e0b; color: #fff;">2</span>
                        </a>
                        <a href="{{ url('/chat/conversation?user=2') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '2' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">Jane Smith</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">1h ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small">I will come to your place.</p>
                            </div>
                        </a>
                        <a href="{{ url('/chat/conversation?user=3') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '3' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">Alice Brown</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">30m ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small">Is the book still available?</p>
                            </div>
                            <span class="badge rounded-pill ms-3" style="background-color: #f59e0b; color: #fff;">1</span>
                        </a>
                        <a href="{{ url('/chat/conversation?user=1') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '1' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">John Doe</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">2h ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small">Can you give me a discount?</p>
                            </div>
                            <span class="badge rounded-pill ms-3" style="background-color: #f59e0b; color: #fff;">2</span>
                        </a>
                        <a href="{{ url('/chat/conversation?user=2') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '2' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">Jane Smith</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">1h ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small">I will come to your place.</p>
                            </div>
                        </a>
                        <a href="{{ url('/chat/conversation?user=3') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center p-4 border-bottom {{ request()->query('user') == '3' ? 'active' : '' }}">
                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                alt="User" class="rounded-circle me-3"
                                style="width: 48px; height: 48px; object-fit: cover; border: 2px solid #e5e7eb;">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 fw-semibold text-dark">Alice Brown</h6>
                                    <small class="ms-2 text-muted" style="font-size: 0.75rem;">30m ago</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate small">Is the book still available?</p>
                            </div>
                            <span class="badge rounded-pill ms-3" style="background-color: #f59e0b; color: #fff;">1</span>
                        </a>
                        <!-- Add more users as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
