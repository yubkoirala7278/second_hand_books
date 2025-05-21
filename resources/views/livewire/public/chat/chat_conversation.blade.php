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

        .bg-light {
            background-color: var(--soft-gray) !important;
        }

        .bg-navy {
            background-color: var(--navy-blue) !important;
        }

        .bg-gradient-navy {
            background: linear-gradient(135deg, var(--navy-blue) 0%, #3b82f6 100%) !important;
        }

        .btn-amber {
            color: var(--amber);
            ;
            border: none;
        }

        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .chat-messages {
            scrollbar-width: thin;
            scrollbar-color: #9ca3af var(--soft-gray);
        }

        .chat-messages::-webkit-scrollbar {
            width: 6px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: var(--soft-gray);
            border-radius: 3px;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background: #9ca3af;
            border-radius: 3px;
        }

        .chat-messages::-webkit-scrollbar-thumb:hover {
            background: var(--charcoal-gray);
        }

        .message-received .message-bubble {
            background-color: #e5e7eb;
            border-radius: 12px 12px 12px 0;
            max-width: 70%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .message-sent .message-bubble {
            background-color: var(--navy-blue);
            color: #fff;
            border-radius: 12px 12px 0 12px;
            max-width: 70%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .message-bubble p {
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
        }

        .message-bubble small {
            font-size: 0.75rem;
        }

        .form-control,
        .btn-amber {
            transition: all 0.2s ease;
        }

        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .chat-messages {
                padding: 0.75rem;
            }

            .chat-messages img {
                width: 25px;
                height: 25px;
            }

            .message-bubble p {
                font-size: 0.9rem;
            }

            .message-bubble small {
                font-size: 0.7rem;
            }

            .card-header img {
                width: 35px;
                height: 35px;
            }

            .card-header h5 {
                font-size: 1.1rem;
            }

            .form-control {
                font-size: 0.9rem;
            }

            .btn-amber {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="bg-light px-3">
        <div class=" py-4 py-md-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header py-3 bg-gradient-navy d-flex align-items-center">
                    <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                        alt="User" class="rounded-circle me-3"
                        style="width: 40px; height: 40px; object-fit: cover; border: 2px solid #e5e7eb;">
                    <h5 class="mb-0 fw-semibold text-white">John Doe</h5>
                </div>
                <div class="card-body p-0">
                    <div class="chat-messages p-4 overflow-y-auto" style="max-height: calc(100vh - 250px);">
                        <!-- Messages -->
                        <div class="message-received mb-3">
                            <div class="d-flex align-items-end">
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                    alt="User" class="rounded-circle me-2"
                                    style="width: 30px; height: 30px; object-fit: cover; border: 1px solid #e5e7eb;">
                                <div class="bg-light p-2 rounded message-bubble">
                                    <p class="mb-0">Can you give me a discount?</p>
                                    <small class="text-muted">12:30 PM</small>
                                </div>
                            </div>
                        </div>
                        <div class="message-sent mb-3">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="bg-navy text-white p-2 rounded message-bubble me-2">
                                    <p class="mb-0">No, it’s not negotiable.</p>
                                    <small class="text-white">12:32 PM</small>
                                </div>
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person_23-2149436191.jpg?semt=ais_hybrid&w=740"
                                    alt="Sender" class="rounded-circle"
                                    style="width: 30px; height: 30px; object-fit: cover; border: 1px solid #e5e7eb;">
                            </div>
                        </div>
                        <div class="message-received mb-3">
                            <div class="d-flex align-items-end">
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?semt=ais_hybrid&w=740"
                                    alt="User" class="rounded-circle me-2"
                                    style="width: 30px; height: 30px; object-fit: cover; border: 1px solid #e5e7eb;">
                                <div class="bg-light p-2 rounded message-bubble">
                                    <p class="mb-0">Should I come to your place, or will you come?</p>
                                    <small class="text-muted">12:35 PM</small>
                                </div>
                            </div>
                        </div>
                        <div class="message-sent mb-3">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="bg-navy text-white p-2 rounded message-bubble me-2">
                                    <p class="mb-0">I will come to you.</p>
                                    <small class="text-white">12:36 PM</small>
                                </div>
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person_23-2149436191.jpg?semt=ais_hybrid&w=740"
                                    alt="Sender" class="rounded-circle"
                                    style="width: 30px; height: 30px; object-fit: cover; border: 1px solid #e5e7eb;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-3 bg-white">
                    <form class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Type a message..."
                            style="border-radius: 20px;">
                        <button type="submit" class="btn btn-amber" style="border-radius: 20px;">
                            <i class="fas fa-paper-plane fs-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
