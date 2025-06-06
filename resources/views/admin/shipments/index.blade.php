@extends('layouts.admin')
@section('content')
    <!-- Shipment content -->
    <div class="col-lg-9 pt-2 pt-xl-3">
        <!-- Header -->
        <div class="d-sm-flex align-items-center justify-content-between gap-3 pb-2 pb-sm-3 mb-md-2">
            <h1 class="h2 text-nowrap mb-sm-0">Shipments ({{ $shipmentsCount }})</h1>
            <div class="d-flex align-items-center gap-3">
                <!-- Search -->
                <div class="position-relative w-100" style="max-width: 300px">
                    <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="search" class="product-search form-control form-icon-start rounded-pill" placeholder="Search...." id="shipmentSearch" value="{{ request('search') }}">
                </div>
                <!-- Sort Filter -->
                <select id="sortFilter" class="form-select rounded-pill" style="max-width: 200px">
                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                </select>
            </div>
        </div>

        <!-- Shipment list (table) -->
        <table class="table align-middle fs-sm mb-4">
            <thead>
                <tr>
                    <th class="px-0 pe-sm-2" scope="col">
                        <span class="fw-normal text-body">Details</span>
                    </th>
                    <th class="d-none d-md-table-cell" scope="col">
                        <span class="fw-normal text-body">Date</span>
                    </th>

                    <th class="d-md-table-cell" scope="col">
                        <span class="fw-normal text-body">Destination</span>
                    </th>

                    <th class="d-none d-md-table-cell" scope="col">
                        <span class="fw-normal text-body">Status</span>
                    </th>
                    <th class="d-none d-sm-table-cell pe-0" scope="col"></th>
                </tr>
            </thead>
            <tbody class="product-list">
                @forelse($shipments as $shipment)
                    <!-- Item -->
                    <tr>
                        <td class="py-3 px-0 pe-sm-2">
                            <div class="d-none d-md-block d-xl-none" style="width: 350px"></div>
                            <div class="d-none d-xl-block" style="width: 450px"></div>
                            <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative py-1">
                                <div>
                                    <h6 class="product mb-2">
                                        <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="/tracking?tracking_code={{ $shipment->tracking_code }}" target="_blank">{{ $shipment->tracking_code }}</a>
                                    </h6>

                                    <div class="d-flex align-items-center flex-wrap gap-1 fs-xs">
                                        <div class="author d-flex align-items-center fs-xs fw-medium text-body gap-1 p-0">
                                            <div class="flex-shrink-0 border rounded-circle" style="width: 22px">
                                                <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                                                    <img src="https://placehold.co/124x124/222934/ffffff?text={{ substr(ucfirst($shipment->sender_name), 0, 1) }}" alt="Avatar" loading="lazy">
                                                </div>
                                            </div>
                                            {{ $shipment->sender_name }}
                                        </div>
                                        <div class="text-body-secondary">to</div>
                                        <div class="category fs-xs fw-medium text-body">{{ $shipment->receiver_name }}</div>
                                    </div>

                                    <!-- Visible on screens < 769px wide (md breakpoint) -->
                                    <div class="fs-xs text-nowrap d-md-none mt-2 mb-1">
                                        <span class="text-body-secondary">Type:</span>
                                        <span class="license">{{ ucwords(str_replace('_', ' ', $shipment->shipment_type)) }}</span>
                                    </div>

                                    <!-- Visible on screens < 769px wide (md breakpoint) -->
                                    <div class="fs-xs text-nowrap d-md-none mt-2 mb-1">
                                        <span class="text-body-secondary">Status:</span>
                                        <span class="license badge text-bg-info rounded-pill">{{ ucwords(str_replace('_', ' ', $shipment->status)) }}</span>
                                    </div>

                                    <div class="fs-xs text-nowrap d-md-none">
                                        <span class="text-body-secondary">Date:</span> {{ getTime($shipment->created_at) }}
                                    </div>
                                    <!-- Visible on screens < 500px wide (sm breakpoint) -->
                                    <a href="{{ route('admin.shipments.edit', $shipment->id) }}" class="btn btn-sm btn-primary rounded-pill animate-scale position-relative z-2 d-sm-none mt-3">
                                        <i class="ci-edit-3 animate-target fs-sm me-1"></i>
                                        Edit
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger rounded-pill animate-scale position-relative z-2 d-sm-none mt-3 ms-2" onclick="confirmDelete({{ $shipment->id }})">
                                        <i class="ci-close-octagon animate-target fs-sm me-1"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                        <!-- Visible on screens > 768px wide (md breakpoint) -->
                        <td class="d-none d-md-table-cell py-3">{{ getTime($shipment->created_at) }}</td>

                        <td class="d-md-table-cell py-3">{{ ucwords($shipment->destination) }}</td>

                        <td class="d-none d-md-table-cell py-3"><span class="badge text-bg-info rounded-pill">{{ ucwords(str_replace('_', ' ', $shipment->status)) }}</span></td>

                        <!-- Visible on screens > 500px wide (sm breakpoint) -->
                        <td class="d-none d-sm-table-cell text-end py-3 ps-0 ps-sm-3 pe-0" style="width: 120px">
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ route('admin.shipments.edit', $shipment->id) }}" class="btn btn-sm btn-primary rounded-pill animate-scale">
                                    <i class="ci-edit-3 animate-target fs-sm me-1"></i>
                                    Edit
                                </a>

                                <button type="button" class="btn btn-sm btn-danger rounded-pill animate-scale" onclick="confirmDelete({{ $shipment->id }})">
                                    <i class="ci-close-octagon animate-target fs-sm me-1"></i>
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-3 ps-0 pt-4 pb-4" colspan="5">
                            <h2 class="h6 pt-2 mb-2">You have no shipments</h2>
                            <p class="fs-sm mb-4" style="max-width: 640px">
                                You haven't created any shipments yet. Create your first shipment to start tracking packages
                                and managing deliveries.
                            </p>
                            <a href="{{ route('admin.shipments.create') }}" class="btn btn-dark">
                                <i class="ci-plus fs-base ms-n1 me-2"></i>
                                Add Shipment
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $shipments->links('vendor.pagination.bootstrap-5') }}

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Are you sure you want to delete this shipment? This action cannot be undone.
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form id="deleteForm" method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Search, Sort, and Delete -->
    <script>
        // Debounce function to limit how often a function is called
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Search functionality with debounce
        document.getElementById('shipmentSearch').addEventListener('input', debounce(function(e) {
            const searchTerm = e.target.value;
            const url = new URL(window.location.href);
            url.searchParams.set('search', searchTerm);
            window.location.href = url.toString();
        }, 1000));

        // Sort functionality
        document.getElementById('sortFilter').addEventListener('change', function(e) {
            const sortValue = e.target.value;
            const url = new URL(window.location.href);
            url.searchParams.set('sort', sortValue);
            window.location.href = url.toString();
        });

        // Delete confirmation
        function confirmDelete(shipmentId) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/shipments/${shipmentId}/delete`;
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        }
    </script>
@endsection
