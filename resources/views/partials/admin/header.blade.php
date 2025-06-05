<!-- Navigation bar (Page header) -->
<header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element="">
    <div class="container flex-nowrap">
        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand py-1 py-md-2 py-xl-1" href="/">
            <span class="text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 135.45 135.45">
                    <title>logo</title>
                    <path d="M0,0V86.08L91.13,44.32,49.37,135.45h86.08V0ZM80.73,122.46,122.46,13,13,54.72V13H122.46V122.46Z" fill="currentColor"/>
                    <path d="M9.14,95.23l31.08,31.08,26.3-57.38Zm26.33,6.49-7.69,7.69L26,107.67,33.73,100Zm12-12-7.69,7.69L38,95.69,45.71,88Zm4.29-4.29L50,83.71,57.69,76l1.73,1.74Z" fill="currentColor"/>
                </svg>
            </span>
            {{ config('app.name', 'Shipex') }}
        </a>

        <!-- Button group -->
        <div class="d-flex align-items-center">
            <!-- Account button (logged in state) with dropdown visible on screens > 768px wide (md breakpoint) -->
            <div class="dropdown d-md-block mx-1">
                <a class="btn btn-icon hover-effect-scale position-relative border rounded-circle overflow-hidden" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="My account">
                    <img src="{{ asset('admin/img/account/avatar-sm.png') }}" class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Avatar">
                </a>

                <ul class="dropdown-menu dropdown-menu-end" style="--cz-dropdown-spacer: .625rem">
                    <li><span class="h6 dropdown-header">{{ auth()->user()->name }}</span></li>
                    <li>
                        <a class="dropdown-item" href="account-marketplace-dashboard.html">
                            <i class="ci-grid fs-base opacity-75 me-2"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ isActive('admin.shipments') }}" href="{{ route('admin.shipments') }}">
                            <i class="ci-layers fs-base opacity-75 me-2"></i>
                            Shipments (4)
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ isActive('admin.reports') }}" href="{{ route('admin.reports') }}">
                            <i class="ci-pie-chart fs-base opacity-75 me-2"></i>
                            Reports
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="/tracking" target="_blank">
                            <i class="ci-dollar-sign fs-base opacity-75 me-2"></i>
                            Tracking
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ isActive('admin.profile') }}" href="{{ route('admin.profile')  }}">
                            <i class="ci-settings fs-base opacity-75 me-2"></i>
                            Settings
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <x-logout-component>
                            <i class="ci-log-out fs-base opacity-75 me-2"></i>
                            Log out
                        </x-logout-component>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
