<!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
<aside class="col-lg-3">
    <div class="d-none d-lg-block" style="margin-top: -105px"></div>
    <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-0 pe-xl-4" id="accountSidebar">
        <div class="d-none d-lg-block" style="padding-top: 105px"></div>

        <!-- Header -->
        <div class="offcanvas-header align-items-start d-lg-block py-3 p-lg-0">
            <div class="d-flex align-items-start flex-lg-column gap-lg-3">
                <!-- Visible on screens > 991px wide -->
                <div class="ratio ratio-1x1 border rounded-circle overflow-hidden d-none d-lg-block" style="width: 86px">
                    <img src="{{ asset('admin/img/account/avatar.png') }}" alt="Avatar" loading="lazy">
                </div>

                <!-- Visible on screens < 992px wide -->
                <div class="ratio ratio-1x1 border rounded-circle overflow-hidden flex-shrink-0 d-lg-none" style="width: 48px">
                    <img src="{{ asset('admin/img/account/avatar.png') }}" alt="Avatar" loading="lazy">
                </div>

                <div class="w-100 ps-2 ms-1 ms-lg-0 ps-lg-0">
                    <h4 class="h6 mb-1 mb-lg-2">{{ auth()->user()->name }}</h4>
                    <p class="fs-sm mb-0">Reliable Logistic & Transport Solutions Saves You Time!</p>
                </div>
            </div>

            <button type="button" class="btn-close d-lg-none mt-n2" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
        </div>

        <!-- Body (Navigation) -->
        <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center rounded-pill {{ isActive('admin.dashboard') }}" href="{{ route('admin.dashboard') }}">
                    <i class="ci-grid fs-base opacity-75 me-2"></i>
                    Dashboard
                </a>

                <a class="list-group-item list-group-item-action d-flex align-items-center rounded-pill {{ isActive('admin.shipments') }}" href="{{ route('admin.shipments') }}">
                    <i class="ci-layers fs-base opacity-75 me-2"></i>
                    Shipments (4)
                </a>

                <a class="list-group-item list-group-item-action d-flex align-items-center rounded-pill {{ isActive('admin.reports') }}" href="{{ route('admin.reports') }}">
                    <i class="ci-pie-chart fs-base opacity-75 me-2"></i>
                    Reports
                </a>

                <a class="list-group-item list-group-item-action d-flex align-items-center rounded-pill" href="/tracking" target="_blank">
                    <i class="ci-dollar-sign fs-base opacity-75 me-2"></i>
                    Tracking
                </a>
            </nav>

            <h6 class="pt-4 ps-2 ms-1">Manage</h6>

            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center rounded-pill {{ isActive('admin.profile') }}" href="{{ route('admin.profile') }}">
                    <i class="ci-settings fs-base opacity-75 me-2"></i>
                    Settings
                </a>

                <x-logout-component class="list-group-item list-group-item-action d-flex align-items-center rounded-pill logout" linkId="logout-sidebar" >
                    <i class="ci-log-out fs-base opacity-75 me-2"></i>
                    Log out
                </x-logout-component>
            </nav>
        </div>

        <div class="offcanvas-header d-lg-block p-lg-0">
            <a href="{{ route('admin.shipments.create') }}" class="btn btn-dark rounded-pill w-100 animate-scale mt-lg-4">
                <i class="ci-plus-circle fs-base animate-target me-2 ms-n1"></i>
                Add shipment
            </a>
        </div>
    </div>
</aside>
