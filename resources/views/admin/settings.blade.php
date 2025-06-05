@extends('layouts.admin')
@section('content')
    <!-- Account settings content -->
    <div class="col-lg-9 pt-2 pt-xl-3">

        <!-- Page title -->
        <h1 class="h2 pb-1 pb-sm-2 pb-md-3">{{ formatTabName(request()->get('tab')) }}</h1>

        <!-- Nav tabs -->
        <div class="overflow-auto mb-3">
            <ul class="nav nav-pills flex-nowrap gap-2 text-nowrap pb-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="?tab=profile" class="nav-link {{ request()->get('tab', 'profile') === 'profile' ? 'active' : '' }}" id="profile-tab" role="tab" aria-controls="profile" aria-selected="{{ request()->get('tab', 'profile') === 'profile' ? 'true' : 'false' }}">
                        <i class="ci-user fs-base opacity-75 me-2"></i>
                        Profile
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a href="?tab=security" class="nav-link {{ request()->get('tab') === 'security' ? 'active' : '' }}" id="security-tab" role="tab" aria-controls="security" aria-selected="{{ request()->get('tab') === 'security' ? 'true' : 'false' }}">
                        <i class="ci-check-shield fs-base opacity-75 me-2"></i>
                        Security
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a href="?tab=email" class="nav-link {{ request()->get('tab') === 'email' ? 'active' : '' }}" id="email-tab" role="tab" aria-controls="email" aria-selected="{{ request()->get('tab') === 'email' ? 'true' : 'false' }}">
                        <i class="ci-mail fs-base opacity-75 me-2"></i>
                        Email
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tabs content -->
        <div class="tab-content">
            <!-- Profile tab -->
            <div class="tab-pane fade {{ request()->get('tab', 'profile') === 'profile' ? 'show active' : '' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Settings form -->
                <form action="{{ route('admin.profile.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                        <div class="col position-relative">
                            <label for="name" class="form-label fs-base">Full name *</label>
                            <input id="name" type="text" class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name', auth()->user()->name) }}" autocomplete="name" autofocus placeholder="Enter fullname">

                            @error('name')
                            <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col position-relative">
                            <label for="email" class="form-label d-flex align-items-center fs-base">Email address * <span class="badge bg-success ms-2">Verified</span></label>
                            <input id="email" type="email" class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email', auth()->user()->email) }}" autocomplete="email" placeholder="Email Address">

                            @error('email')
                            <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="display-name" class="form-label fs-base">Role</label>
                            <input type="text" class="form-control form-control-lg form-icon-end rounded-pill" id="display-name" placeholder="Super Admin" readonly>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill">Save changes</button>
                    </div>
                </form>
            </div>

            <!-- Security tab -->
            <div class="tab-pane fade {{ request()->get('tab') === 'security' ? 'show active' : '' }}" id="security" role="tabpanel" aria-labelledby="security-tab">
                <p class="mb-sm-4">Your current email address is <span class="fw-medium text-primary">{{ auth()->user()->email }}</span></p>

                <!-- Change password form -->
                <form action="{{ route('admin.password.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                        <div class="col">
                            <label for="current-password" class="form-label fs-base">Current password</label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg rounded-pill @error('current_password') is-invalid @enderror" id="current-password" name="current_password" value="{{ old('current_password') }}" placeholder="Current Password">

                                @error('current_password')
                                <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                                @enderror

                                <label class="password-toggle-button" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                        <div class="col">
                            <label for="new-password" class="form-label fs-base">New password <span class="fs-sm fw-normal text-body-secondary">(Min 8 chars)</span></label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror" minlength="8" id="new-password" name="password" value="{{ old('password') }}" placeholder="New Password">

                                @error('password')
                                <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                                @enderror

                                <label class="password-toggle-button" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <label for="confirm-new-password" class="form-label fs-base">Confirm new password</label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg rounded-pill @error('password_confirmation') is-invalid @enderror" minlength="8" id="confirm-new-password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm New Password">

                                @error('password_confirmation')
                                <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                                @enderror

                                <label class="password-toggle-button" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill">Update password</button>
                    </div>
                </form>

                <!-- Device history -->
                <h3 class="h4 pt-5 mt-md-3 mb-sm-4">Device history</h3>
                <div class="row g-3 g-xl-4 mb-3 mb-md-4">
                    @foreach ($activeSessions as $session)
                        <div class="col-sm-6 col-md-4">
                            <div class="card h-100">
                                <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm fs-xl text-dark-emphasis border-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                                        <i class="ci-more-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 8rem">
                                        <li>
                                            <!-- Pass session data to the component -->
                                            <x-logout-one-device :session="$session" />
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body pb-2">
                                    <i class="ci-computer fs-3 text-body-tertiary pb-1 mb-2"></i>
                                    <h6 class="mb-0">{{ $session['device'] }} - {{ $session['platform'] }}</h6>
                                </div>

                                <div class="card-footer d-flex align-items-center gap-2 bg-transparent border-0 pt-0 pb-4">
                                    <span class="fs-sm text-body-secondary">{{ $session['browser'] }}</span>
                                    @if ($session['is_current'])
                                        <span class="badge text-success bg-success-subtle">Active now</span>
                                    @else
                                        <span class="fs-sm text-body-secondary">{{ $session['last_activity'] }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="nav">
                    <!-- logout-all-device component -->
                    <x-logout-all-device />
                </div>

                <!-- Delete account -->
                <h2 class="h6 pt-5 mt-xl-2 pb-1 mb-2">Delete account</h2>
                <p class="fs-sm">When you delete your account, your public profile will be deactivated immediately. If you change your mind before the 14 days are up, sign in with your email and password, and we'll send a link to reactivate account.</p>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="confirm-deletion">
                    <label for="confirm-deletion" class="form-check-label">Yes, I want to delete my account</label>
                </div>
                <a class="fs-sm fw-medium text-danger" href="#">Delete account</a>
            </div>

            <!-- Security tab -->
            <div class="tab-pane fade {{ request()->get('tab') === 'email' ? 'show active' : '' }}" id="email" role="tabpanel" aria-labelledby="email-tab">
                <div class="card rounded mb-5">
                    <div class="card-body">
                        <form action="{{ route('admin.send.test.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 position-relative">
                                    <div class="form-group">
                                        <label class="form-label fs-base" for="test-email">Test Email Address *</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control rounded-end-0 @error('email') is-invalid @enderror" name="email" id="test-email" type="email" value="{{ old('email') }}" placeholder="Enter recipient email address" autocomplete="off">
                                            @error('email')
                                            <div class="invalid-tooltip bg-transparent py-0">{{ $message }}</div>
                                            @enderror
                                            <button type="submit" class="btn btn-outline-dark rounded-start-0">Send Test Email</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
