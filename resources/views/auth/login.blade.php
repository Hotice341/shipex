@extends('layouts.auth')
@section('content')
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
        <div class="d-lg-flex">
            <!-- Login form + Footer -->
            <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">
                <!-- Logo -->
                <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                    <a href="/" class="navbar-brand pt-0">
                        <span class="text-primary me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 135.45 135.45">
                                <title>logo</title>
                                <path d="M0,0V86.08L91.13,44.32,49.37,135.45h86.08V0ZM80.73,122.46,122.46,13,13,54.72V13H122.46V122.46Z" fill="currentColor"/>
                                <path d="M9.14,95.23l31.08,31.08,26.3-57.38Zm26.33,6.49-7.69,7.69L26,107.67,33.73,100Zm12-12-7.69,7.69L38,95.69,45.71,88Zm4.29-4.29L50,83.71,57.69,76l1.73,1.74Z" fill="currentColor"/>
                            </svg>
                        </span>
                        {{ config('app.name', 'Shipex') }}
                    </a>
                </header>

                <h1 class="h2 mt-auto">Hi admin,</h1>
                <div class="nav fs-sm mb-4">
                    Please login with your email and password to proceed.
                </div>

                <!-- Form -->
                <form action="{{ route('login.store')  }}" method="POST">
                    @csrf

                    <div class="position-relative mb-4">
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email Address">
                        @error('email')
                        <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="password-toggle">
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                            @enderror
                            <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                <input type="checkbox" class="btn-check">
                            </label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check me-2">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="form-check-label">Remember for 30 days</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100">Sign In</button>
                </form>

                <!-- Footer -->
                <footer class="mt-auto">
                    <div class="nav mb-4">
                        <a class="nav-link text-decoration-underline p-0" href="/">Need help?</a>
                    </div>
                    <p class="fs-xs mb-0">
                        © All rights reserved.
                        <span class="animate-underline">
                            <a class="animate-target text-dark-emphasis text-decoration-none" href="/" target="_blank" rel="noreferrer">{{ config('app.name', 'Shipex') }}</a>
                        </span>
                    </p>
                </footer>
            </div>

            <!-- Cover image visible on screens > 992px wide (lg breakpoint) -->
            <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
                <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">
                    <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                    <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                        <img src="{{ asset('admin/custom/img/impact-home-hero.svg') }}" alt="Girl" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
