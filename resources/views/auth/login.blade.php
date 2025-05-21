@extends('layouts.app')

@section('content')
    <div class="login-container py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4 p-md-5">
                            <!-- Logo -->
                            <div class="text-center mb-4">
                                <img src="https://sajhakitab.com/wp-content/uploads/2021/01/Untitled-1-1.png"
                                    alt="SajhaKitab Logo" class="img-fluid" style="max-height: 80px;">
                                <h4 class="mt-2 fw-bold text-primary">Welcome to SajhaKitab</h4>
                                <p class="text-muted small">Login to explore second-hand books</p>
                            </div>

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input id="email" type="email"
                                            class="form-control rounded-end @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input id="password" type="password"
                                            class="form-control rounded-end @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary btn-login">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('styles')
    <style>
        :root {
            --primary: #1e3a8a;
            --secondary: #15803d;
            --bg: #ffffff;
            --accent: #f3f4f6;
            --yellow: #e1893c;
            --soft-ivory: #F8F9FA;
            --deep-teal: #1A4D5E;
            --coral: #FF6F61;
            --charcoal-gray: #333F48;
            --golden-beige: #D4A373;
            --soft-gray: #E5E7EB;
            --charcoal-gray: #4B5563;
            --slate-blue: #64748B;
            --light-bg: #F9FAFB;
        }

        .login-container {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            transition: transform 0.3s;
        }

      
        .form-control,
        .btn {
            border-radius: 8px;
        }

       

        .btn-login {
            background-color: var(--primary);
            border: none;
            font-weight: 500;
            transition: background-color 0.2s, transform 0.2s;
        }

       
        .text-primary {
            color: var(--primary) !important;
        }

        .btn-link {
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            .card {
                padding: 1rem;
            }

            .card-body {
                padding: 1.5rem !important;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .btn {
                font-size: 0.85rem;
            }

            img {
                max-height: 60px;
            }

            h4 {
                font-size: 1.25rem;
            }

            p.small {
                font-size: 0.8rem;
            }

            .btn-link {
                font-size: 0.8rem;
            }
        }
    </style>
@endsection
