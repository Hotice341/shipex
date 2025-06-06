@extends('layouts.admin')
@section('content')
    <!-- Shipment content -->
    <div class="col-lg-9 pt-2 pt-xl-3">
        <!-- Header -->
        <div class="d-sm-flex align-items-center justify-content-between gap-3 pb-2 pb-sm-3 mb-md-2">
            <h1 class="h2 text-nowrap mb-sm-0">Dashboard</h1>
        </div>

        <!-- Earnings chart -->
        <div class="pb-3 mb-2 mb-sm-3">
            <div class="border rounded-4 py-4 px-3 px-sm-4">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-4">
                    <!-- Title -->
                    <h2 class="h5 text-center mb-3 mb-sm-0">Shipments history</h2>

                    <!-- Period select -->
                    <div class="position-relative mb-3 mb-sm-0" style="width: 190px;">
                        <i class="ci-calendar position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                        <select id="periodSelect" class="form-select form-icon-start rounded-pill ps-5" data-select='{"classNames": {"containerInner": ["form-select", "form-icon-start", "rounded-pill"]},"removeItemButton": false}' aria-label="Select period">
                            <option value="current_month">Current month</option>
                            <option value="last_month">Last month</option>
                            <option value="last_3_months">Last 3 months</option>
                            <option value="last_6_months">Last 6 months</option>
                            <option value="last_year">Last year</option>
                        </select>
                    </div>
                </div>

                <!-- Chart -->
                <div id="chartLoading" class="d-flex justify-content-center align-items-center" style="height: 350px; min-height: 300px;">
                    <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <canvas id="shipmentsChart" class="d-none"></canvas>
            </div>
        </div>

        <!-- Shipment list (table) -->
        <div class="border border-primary-subtle rounded-4 py-4 px-3 px-sm-4">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3 mb-2 mb-sm-3 mb-md-4">
                <h2 class="h5 text-center text-sm-start mb-0">Shipments</h2>

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

                        <th class="d-none d-md-table-cell pe-0" scope="col">
                            <span class="fw-normal text-body">Status</span>
                        </th>
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
                                    </div>
                                </div>
                            </td>
                            <!-- Visible on screens > 768px wide (md breakpoint) -->
                            <td class="d-none d-md-table-cell py-3">{{ getTime($shipment->created_at) }}</td>

                            <td class="d-md-table-cell py-3">{{ ucwords($shipment->destination) }}</td>

                            <td class="d-none d-md-table-cell py-3"><span class="badge text-bg-info rounded-pill">{{ ucwords(str_replace('_', ' ', $shipment->status)) }}</span></td>
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
        </div>

        <!-- Pagination -->
        {{ $shipments->links('vendor.pagination.bootstrap-5') }}
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

    <script>
        window.addEventListener('load', function() {
            const ctx = document.getElementById('shipmentsChart').getContext('2d');
            let shipmentsChart = null;

            // Initialize the chart with empty data
            function initChart(labels = [], datasets = []) {
                if (shipmentsChart) {
                    shipmentsChart.destroy();
                }

                shipmentsChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: datasets.map((dataset, index) => {
                            const colors = [
                                { bg: 'rgba(51,179,107,.35)', border: '#33b36b', point: '#33b36b' }, // green (approved)
                                { bg: 'rgba(255,193,7,.35)', border: '#ffc107', point: '#ffc107' }, // yellow (pending)
                                { bg: 'rgba(245,82,102,.35)', border: '#f55266', point: '#f55266' }  // red (failed)
                            ];

                            return {
                                label: dataset.label,
                                fill: true,
                                data: dataset.data,
                                backgroundColor: colors[index].bg,
                                borderWidth: 2,
                                borderColor: colors[index].border,
                                pointBackgroundColor: colors[index].point,
                                pointBorderWidth: 8,
                                pointBorderColor: colors[index].bg,
                                pointHoverBorderColor: colors[index].border,
                                pointHoverBorderWidth: 6
                            };
                        })
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                border: {
                                    color: 'rgba(133,140,151,.18)'
                                },
                                grid: {
                                    color: 'rgba(133,140,151,.18)'
                                }
                            },
                            x: {
                                border: {
                                    color: 'rgba(133,140,151,.18)'
                                },
                                grid: {
                                    color: 'rgba(133,140,151,.18)'
                                }
                            }
                        }
                    }
                });
            }

            // Fetch data from server
            function fetchDonationData(period) {
                const spinner = document.getElementById('chartLoading');
                const canvas = document.getElementById('shipmentsChart');

                // Show loading spinner and hide canvas
                spinner.classList.remove('d-none');
                canvas.classList.add('d-none');

                fetch(`/admin/shipments-chart?period=${period}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (shipmentsChart) {
                            shipmentsChart.data.labels = data.labels;
                            shipmentsChart.data.datasets.forEach((dataset, index) => {
                                dataset.data = data.datasets[index].data;
                            });
                            shipmentsChart.update();
                        } else {
                            initChart(data.labels, data.datasets);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        // Optional: Show an error message to the user
                    })
                    .finally(() => {
                        // Hide spinner and show canvas
                        spinner.classList.add('d-none');
                        canvas.classList.remove('d-none');
                    });
            }

            // Handle filter changes
            function handleFilterChange() {
                const period = document.getElementById('periodSelect').value;
                fetchDonationData(period);
            }

            // Set up event listeners
            document.getElementById('periodSelect').addEventListener('change', handleFilterChange);

            // Initial load
            handleFilterChange();
        });
    </script>
@endsection
