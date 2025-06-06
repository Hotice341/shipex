@extends('layouts.auth')
@section('content')
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1200px">
        <div class="d-flex flex-column">
            <!-- Tracking Form Section -->
            <div class="w-100 mx-auto @if(!isset($shipment)) d-flex flex-column justify-content-center min-vh-80 py-5 @else py-4 @endif" style="max-width: 450px">
                <div class="@if(!isset($shipment)) my-auto @endif">
                    <h1 class="h2 mt-auto text-center">Track Your Shipment</h1>
                    <p class="text-muted text-center mb-4">
                        Enter your tracking code to monitor your shipment's status.
                    </p>

                    <form action="{{ route('tracking') }}" method="get" class="d-flex flex-column align-items-center">
                        <div class="position-relative mb-4 w-100">
                            <input id="tracking_code" type="text"
                                   class="form-control form-control-lg @error('tracking_code') is-invalid @enderror"
                                   name="tracking_code"
                                   value="{{ old('tracking_code', request('tracking_code')) }}"
                                   autocomplete="off"
                                   autofocus
                                   placeholder="Enter tracking number">
                            @error('tracking_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100">
                            <i class="ci-location-arrow me-2"></i> Track Shipment
                        </button>
                    </form>

                    @if (request()->has('tracking_code') && !isset($shipment))
                        <div class="alert alert-danger mt-4 text-center">
                            <i class="ci-close-circle me-2"></i>
                            No shipment found with tracking code: <strong>{{ request('tracking_code') }}</strong>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Shipment Results Section -->
            @if (isset($shipment))
                <div class="w-100 py-4 mx-auto" style="max-width: 1000px">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2">
                            <h3 class="h5 mb-4 text-center text-primary">Shipment Details</h3>

                            <!-- Tracking Code and Barcode -->
                            <div class="text-center mb-4">
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <span class="badge bg-light text-dark fs-sm me-2">Tracking #</span>
                                    <span class="fw-bold">{{ $shipment->tracking_code }}</span>
                                </div>
                                <canvas id="barcode" class="w-100" style="max-width: 300px;"></canvas>
                            </div>

                            <!-- Status Indicator -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted">Status:</span>
                                    <span class="badge {{ match ($shipment->status) {
                                        'delivered' => 'bg-success',
                                        'in_transit', 'out_for_delivery' => 'bg-info',
                                        'shipped', 'processing' => 'bg-primary',
                                        'pending', 'awaiting_pickup' => 'bg-secondary',
                                        'failed_delivery', 'lost', 'cancelled', 'returned' => 'bg-danger',
                                        'held_by_customs', 'on_hold' => 'bg-warning',
                                        default => 'bg-secondary'}
                                    }} rounded-pill">
                                        {{ ucwords(str_replace('_', ' ', $shipment->status)) }}
                                    </span>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated
                                        {{ match ($shipment->status) {
                                            'delivered' => 'bg-success',
                                            'in_transit', 'out_for_delivery' => 'bg-info',
                                            'shipped', 'processing' => 'bg-primary',
                                            'pending', 'awaiting_pickup' => 'bg-secondary',
                                            'failed_delivery', 'lost', 'cancelled', 'returned' => 'bg-danger',
                                            'held_by_customs', 'on_hold' => 'bg-warning',
                                            default => 'bg-secondary'}
                                        }}"
                                         style="width: {{ match ($shipment->status) {
                                            'delivered' => 100,
                                            'out_for_delivery' => 80,
                                            'in_transit' => 60,
                                            'shipped', 'held_by_customs', 'on_hold', 'awaiting_pickup' => 40,
                                            'processing' => 20,
                                            'pending' => 10,
                                            'failed_delivery' => 60,
                                            'cancelled', 'returned', 'lost' => 0,
                                            default => 0}
                                        }}%">
                                        {{ match ($shipment->status) {
                                            'delivered' => 100,
                                            'out_for_delivery' => 80,
                                            'in_transit' => 60,
                                            'shipped', 'held_by_customs', 'on_hold', 'awaiting_pickup' => 40,
                                            'processing' => 20,
                                            'pending' => 10,
                                            'failed_delivery' => 60,
                                            'cancelled', 'returned', 'lost' => 0,
                                            default => 0}
                                        }}%
                                    </div>
                                </div>
                            </div>

                            <!-- Timeline Stepper -->
                            <div class="mb-5">
                                <div class="stepper-wrapper">
                                    <div class="stepper-item {{ $shipment->status === 'pending' ? 'active' : 'completed' }}">
                                        <div class="step-counter">
                                            <i class="ci-shopping-bag"></i>
                                        </div>
                                        <div class="step-name">Order Placed</div>
                                    </div>

                                    <div class="stepper-item {{ in_array($shipment->status, ['processing', 'shipped', 'awaiting_pickup', 'in_transit', 'out_for_delivery', 'delivered']) ? 'active' : ($shipment->status === 'pending' ? '' : 'completed') }}">
                                        <div class="step-counter">
                                            <i class="ci-archive"></i>
                                        </div>
                                        <div class="step-name">Processed</div>
                                    </div>

                                    <div class="stepper-item {{ in_array($shipment->status, ['in_transit', 'out_for_delivery', 'delivered']) ? 'active' : (in_array($shipment->status, ['delivered']) ? 'completed' : '') }}">
                                        <div class="step-counter">
                                            <i class="ci-truck"></i>
                                        </div>
                                        <div class="step-name">In Transit</div>
                                    </div>

                                    <div class="stepper-item {{ $shipment->status === 'delivered' ? 'active completed' : '' }}">
                                        <div class="step-counter">
                                            <i class="ci-check"></i>
                                        </div>
                                        <div class="step-name">Delivered</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shipment Details -->
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary mb-4">
                                                <i class="ci-package me-2"></i> Shipment Information
                                            </h5>

                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Origin:</span>
                                                    <span class="fw-bold">{{ ucfirst($shipment->origin) }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Destination:</span>
                                                    <span class="fw-bold">{{ ucfirst($shipment->destination) }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Type:</span>
                                                    <span class="fw-bold">{{ ucwords(str_replace('_', ' ', $shipment->shipment_type)) }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Carrier:</span>
                                                    <span class="fw-bold">{{ $shipment->shipped_via }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary mb-4">
                                                <i class="ci-calendar me-2"></i> Timeline
                                            </h5>

                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Departure:</span>
                                                    <span class="fw-bold">{{ $shipment->departure_date->format('M d, Y') }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Estimated Arrival:</span>
                                                    <span class="fw-bold">{{ $shipment->arrival_date->format('M d, Y') }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Payment:</span>
                                                    <span class="fw-bold">{{ ucwords(str_replace('_', ' ', $shipment->payment_mode)) }}</span>
                                                </li>

                                                <li class="mb-3 d-flex justify-content-between">
                                                    <span class="text-muted">Weight:</span>
                                                    <span class="fw-bold">{{ $shipment->weight ?? 'N/A' }} kg</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="row mt-4 g-4">
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary mb-4">
                                                <i class="ci-user me-2"></i> Sender Details
                                            </h5>

                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><strong>Name:</strong> {{ $shipment->sender_name }}</li>
                                                <li class="mb-2"><strong>Email:</strong> {{ $shipment->sender_email }}</li>
                                                <li class="mb-2"><strong>Phone:</strong> {{ $shipment->sender_phone ?? 'N/A' }}</li>
                                                <li class="mb-2"><strong>Address:</strong> {{ $shipment->sender_address ?? 'N/A' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary mb-4">
                                                <i class="ci-user me-2"></i> Receiver Details
                                            </h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><strong>Name:</strong> {{ $shipment->receiver_name }}</li>
                                                <li class="mb-2"><strong>Email:</strong> {{ $shipment->receiver_email }}</li>
                                                <li class="mb-2"><strong>Phone:</strong> {{ $shipment->receiver_phone ?? 'N/A' }}</li>
                                                <li class="mb-2"><strong>Address:</strong> {{ $shipment->receiver_address ?? 'N/A' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($shipment->comments)
                                <div class="card border-0 shadow-sm mt-4">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary mb-3">
                                            <i class="ci-comment me-2"></i> Additional Notes
                                        </h5>
                                        <p class="mb-0">{{ $shipment->comments }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Footer -->
            <footer class="mt-auto py-4 text-center">
                <div class="mb-3">
                    <a class="btn btn-outline-primary btn-sm" href="/">
                        <i class="ci-home me-2"></i> Return to Homepage
                    </a>
                </div>
                <p class="text-muted small mb-0">
                    © {{ date('Y') }} {{ config('app.name', 'Shipex') }}. All rights reserved.
                </p>
            </footer>
        </div>
    </main>

    <!-- Barcode Script -->
    @if (isset($shipment))
        <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.6/dist/JsBarcode.all.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                JsBarcode("#barcode", "{{ $shipment->tracking_code }}", {
                    format: "CODE128",
                    width: 2,
                    height: 50,
                    displayValue: true,
                    fontSize: 14,
                    textMargin: 5,
                    background: "#ffffff",
                    lineColor: "#000000"
                });
            });
        </script>
    @endif

    <!-- Custom CSS for stepper -->
    <style>
        .stepper-wrapper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }
        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 2px solid #dee2e6;
            width: 100%;
            top: 15px;
            left: -50%;
            z-index: 1;
        }
        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #dee2e6;
            width: 100%;
            top: 15px;
            left: 50%;
            z-index: 1;
        }
        .stepper-item:first-child::before,
        .stepper-item:last-child::after {
            content: none;
        }
        .step-counter {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 8px;
        }
        .stepper-item.completed .step-counter {
            background-color: #198754;
            color: white;
        }
        .stepper-item.active .step-counter {
            background-color: #0d6efd;
            color: white;
        }
        .stepper-item.completed::before,
        .stepper-item.active::before {
            border-color: #198754;
        }
        .step-name {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: center;
        }
        .stepper-item.completed .step-name,
        .stepper-item.active .step-name {
            color: #212529;
            font-weight: 500;
        }
        .min-vh-80 {
            min-height: 80vh;
        }
    </style>
@endsection
