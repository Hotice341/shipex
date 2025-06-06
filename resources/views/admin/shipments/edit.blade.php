@php use Carbon\Carbon; @endphp
@extends('layouts.admin')
@section('content')
    <!-- Shipment content -->
    <div class="col-lg-9 pt-2 pt-xl-3">
        <!-- Page title -->
        <h1 class="h2 pb-1 pb-sm-2 pb-md-3">Create Shipment</h1>

        <div class="d-flex align-items-start">
            <div class="w-100">
                <form method="POST" action="{{ route('admin.shipments.update', $shipment->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Sender Information -->
                    <h2 class="h5 mb-3">Sender Information</h2>
                    <div class="row g-3 g-sm-4 mb-4">
                        <div class="col">
                            <label for="sender_name" class="form-label">Sender's Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('sender_name') is-invalid @enderror" id="sender_name" name="sender_name" placeholder="Enter sender's name" value="{{ old('sender_name', $shipment->sender_name) }}">
                            @error('sender_name')
                            <div class="invalid-feedback">{{ $message ?? 'Please enter the sender\'s name.' }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="sender_email" class="form-label">Sender's Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-lg @error('sender_email') is-invalid @enderror" id="sender_email" name="sender_email" placeholder="Enter sender's email address" value="{{ old('sender_email', $shipment->sender_email) }}">
                            @error('sender_email')
                            <div
                                class="invalid-feedback">{{ $message ?? 'Please enter a valid sender\'s email.' }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="sender_address" class="form-label">Sender's Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('sender_address') is-invalid @enderror" id="sender_address" name="sender_address" placeholder="Enter sender's address" value="{{ old('sender_address', $shipment->sender_address) }}">
                            @error('sender_address')
                            <div class="invalid-feedback">{{ $message ?? 'Please enter the sender\'s address.' }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Receiver Information -->
                    <h2 class="h5 mb-3">Receiver Information</h2>
                    <div class="row g-3 g-sm-4 mb-4">
                        <div class="col">
                            <label for="receiver_name" class="form-label">Receiver's Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('receiver_name') is-invalid @enderror" id="receiver_name" name="receiver_name" placeholder="Enter receiver's name" value="{{ old('receiver_name', $shipment->receiver_name) }}">
                            @error('receiver_name')
                            <div class="invalid-feedback">{{ $message ?? 'Please enter the receiver\'s name.' }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="receiver_email" class="form-label">Receiver's Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-lg @error('receiver_email') is-invalid @enderror" id="receiver_email" name="receiver_email" placeholder="Enter receiver's email address" value="{{ old('receiver_email', $shipment->receiver_email) }}">
                            @error('receiver_email')
                            <div
                                class="invalid-feedback">{{ $message ?? 'Please enter a valid receiver\'s email.' }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="receiver_address" class="form-label">Receiver's Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('receiver_address') is-invalid @enderror" id="receiver_address" name="receiver_address" placeholder="Enter receiver's address" value="{{ old('receiver_address', $shipment->receiver_address) }}">
                            @error('receiver_address')
                            <div
                                class="invalid-feedback">{{ $message ?? 'Please enter the receiver\'s address.' }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Shipping Information -->
                    <h2 class="h5 mb-3">Shipping Information</h2>
                    <div class="shipping-address-section mb-3">
                        <div class="alert alert-info mb-3 small text-start" role="alert">
                            Please provide accurate shipping details, including origin, destination, and shipment type,
                            to ensure smooth processing and delivery of your package.
                        </div>

                        <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4 mb-4">
                            <div class="col">
                                <label for="origin" class="form-label">Origin <span class="text-danger">*</span></label>
                                <select class="form-select form-control-lg @error('origin') is-invalid @enderror" id="origin" name="origin">
                                    <option value="">Select Origin</option>
                                    @foreach($countries as $country)
                                        <option value="{{ Str::snake($country['name']) }}"
                                            {{ old('origin', $shipment->origin) == Str::snake($country['name']) ? 'selected' : '' }}>
                                            {{ $country['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('origin')
                                <div class="invalid-feedback">{{ $message ?? 'Please select the shipment origin.' }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="destination" class="form-label">Destination <span class="text-danger">*</span></label>
                                <select class="form-select form-control-lg @error('destination') is-invalid @enderror" id="destination" name="destination">
                                    <option value="">Select Destination</option>
                                    @foreach($countries as $country)
                                        <option value="{{ Str::snake($country['name']) }}"
                                            {{ old('destination', $shipment->destination) == Str::snake($country['name']) ? 'selected' : '' }}>
                                            {{ $country['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('destination')
                                <div class="invalid-feedback">{{ $message ?? 'Please select the shipment destination.' }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="shipment_type" class="form-label">Shipment Type <span class="text-danger">*</span></label>
                                <select class="form-select form-control-lg @error('shipment_type') is-invalid @enderror" id="shipment_type" name="shipment_type">
                                    <option value="">Select Shipment Type</option>
                                    <option value="standard" {{ old('shipment_type', $shipment->shipment_type) == 'standard' ? 'selected' : '' }}>
                                        Standard
                                    </option>
                                    <option value="express" {{ old('shipment_type', $shipment->shipment_type) == 'express' ? 'selected' : '' }}>
                                        Express
                                    </option>
                                    <option value="overnight" {{ old('shipment_type', $shipment->shipment_type) == 'overnight' ? 'selected' : '' }}>
                                        Overnight
                                    </option>
                                    <option value="international_shipping" {{ old('shipment_type', $shipment->shipment_type) == 'international_shipping' ? 'selected' : '' }}>
                                        International Shipping
                                    </option>
                                    <option value="local" {{ old('shipment_type', $shipment->shipment_type) == 'local' ? 'selected' : '' }}>
                                        Local
                                    </option>
                                    <option value="air_freight" {{ old('shipment_type', $shipment->shipment_type) == 'air_freight' ? 'selected' : '' }}>
                                        Air Freight
                                    </option>
                                    <option
                                        value="truckload" {{ old('shipment_type', $shipment->shipment_type) == 'truckload' ? 'selected' : '' }}>
                                        Truckload
                                    </option>
                                    <option value="van_move" {{ old('shipment_type', $shipment->shipment_type) == 'van_move' ? 'selected' : '' }}>
                                        Van Move
                                    </option>
                                    <option value="ocean_freight" {{ old('shipment_type', $shipment->shipment_type) == 'ocean_freight' ? 'selected' : '' }}>
                                        Ocean Freight
                                    </option>
                                    <option value="road_freight" {{ old('shipment_type', $shipment->shipment_type) == 'road_freight' ? 'selected' : '' }}>
                                        Road Freight
                                    </option>
                                </select>
                                @error('shipment_type')
                                <div class="invalid-feedback">{{ $message ?? 'Please select a shipment type.' }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="payment_mode" class="form-label">Payment Mode <span class="text-danger">*</span></label>
                                <select class="form-select form-control-lg @error('payment_mode') is-invalid @enderror" id="payment_mode" name="payment_mode">
                                    <option value="">Select Payment Mode</option>
                                    <option value="cash_on_delivery" {{ old('payment_mode', $shipment->payment_mode) == 'cash_on_delivery' ? 'selected' : '' }}>
                                        Cash on Delivery
                                    </option>
                                    <option value="credit_card" {{ old('payment_mode', $shipment->payment_mode) == 'credit_card' ? 'selected' : '' }}>
                                        Credit Card
                                    </option>
                                    <option value="debit_card" {{ old('payment_mode', $shipment->payment_mode) == 'debit_card' ? 'selected' : '' }}>
                                        Debit Card
                                    </option>
                                    <option value="bank_transfer" {{ old('payment_mode', $shipment->payment_mode) == 'bank_transfer' ? 'selected' : '' }}>
                                        Bank Transfer
                                    </option>
                                    <option value="mobile_payment" {{ old('payment_mode', $shipment->payment_mode) == 'mobile_payment' ? 'selected' : '' }}>
                                        Mobile Payment
                                    </option>
                                    <option value="paypal" {{ old('payment_mode', $shipment->payment_mode) == 'paypal' ? 'selected' : '' }}>
                                        PayPal
                                    </option>
                                    <option value="check" {{ old('payment_mode', $shipment->payment_mode) == 'check' ? 'selected' : '' }}>
                                        Check
                                    </option>
                                </select>
                                @error('payment_mode')
                                <div class="invalid-feedback">{{ $message ?? 'Please select a payment mode.' }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="shipped_via" class="form-label">Shipped Via <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg @error('shipped_via') is-invalid @enderror" id="shipped_via" name="shipped_via" placeholder="Shipped via" value="{{ old('shipped_via', $shipment->shipped_via ?? config('app.name')) }}" readonly>
                                @error('shipped_via')
                                <div class="invalid-feedback">{{ $message ?? 'Please enter the courier.' }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="departure_date" class="form-label">Departure Date <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="ci-calendar"></i></span>
                                    <input type="text" class="form-control form-control-lg @error('departure_date') is-invalid @enderror" name="departure_date" id="departure_date" data-datepicker='{"minDate": "today"}' placeholder="Choose date" value="{{ old('departure_date', $shipment->departure_date ? Carbon::parse($shipment->departure_date)->format('Y-m-d') : '') }}">
                                    @error('departure_date')
                                    <div class="invalid-feedback">{{ $message ?? 'Please choose the departure date.' }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="arrival_date" class="form-label">Arrival Date <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="ci-calendar"></i></span>
                                    <input type="text" class="form-control form-control-lg @error('arrival_date') is-invalid @enderror" name="arrival_date" id="arrival_date" data-datepicker='{"minDate": "today"}' placeholder="Choose date" value="{{ old('arrival_date', $shipment->arrival_date ? Carbon::parse($shipment->arrival_date)->format('Y-m-d') : '') }}">
                                    @error('arrival_date')
                                    <div class="invalid-feedback">{{ $message ?? 'Please choose the arrival date.' }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <label for="status" class="form-label">Shipment Status <span class="text-danger">*</span></label>
                                <select class="form-select form-control-lg @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value="">Select Shipment Status</option>
                                    <option value="pending" {{ old('status', $shipment->status) == 'pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                    <option value="processing" {{ old('status', $shipment->status) == 'processing' ? 'selected' : '' }}>
                                        Processing
                                    </option>
                                    <option value="shipped" {{ old('status', $shipment->status) == 'shipped' ? 'selected' : '' }}>
                                        Shipped
                                    </option>
                                    <option value="in_transit" {{ old('status', $shipment->status) == 'in_transit' ? 'selected' : '' }}>
                                        In Transit
                                    </option>
                                    <option value="out_for_delivery" {{ old('status', $shipment->status) == 'out_for_delivery' ? 'selected' : '' }}>
                                        Out for Delivery
                                    </option>
                                    <option value="delivered" {{ old('status', $shipment->status) == 'delivered' ? 'selected' : '' }}>
                                        Delivered
                                    </option>
                                    <option value="failed_delivery" {{ old('status', $shipment->status) == 'failed_delivery' ? 'selected' : '' }}>
                                        Failed Delivery
                                    </option>
                                    <option value="held_by_customs" {{ old('status', $shipment->status) == 'held_by_customs' ? 'selected' : '' }}>
                                        Held by Customs
                                    </option>
                                    <option value="on_hold" {{ old('status', $shipment->status) == 'on_hold' ? 'selected' : '' }}>
                                        On Hold
                                    </option>
                                    <option value="awaiting_pickup" {{ old('status', $shipment->status) == 'awaiting_pickup' ? 'selected' : '' }}>
                                        Awaiting Pickup
                                    </option>
                                    <option value="cancelled" {{ old('status', $shipment->status) == 'cancelled' ? 'selected' : '' }}>
                                        Cancelled
                                    </option>
                                    <option value="returned" {{ old('status', $shipment->status) == 'returned' ? 'selected' : '' }}>
                                        Returned
                                    </option>
                                    <option value="lost" {{ old('status', $shipment->status) == 'lost' ? 'selected' : '' }}>
                                        Lost
                                    </option>
                                </select>
                                @error('status')
                                <div class="invalid-feedback">{{ $message ?? 'Please select a shipment status.' }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Notification Options -->
                    <h2 class="h5 mb-3">Notification Options</h2>
                    <div class="form-check mb-4">
                        <input type="checkbox" name="notify_receiver" class="form-check-input" id="notify_receiver" value="1"
                            {{ old('notify_receiver', $shipment->notify_receiver) ? 'checked' : '' }}>
                        <label for="notify_receiver" class="form-check-label">Notify Receiver via Email</label>
                    </div>

                    <!-- Additional Comments -->
                    <h2 class="h5 mb-3">Additional Comments</h2>
                    <div class="mb-4">
                        <label for="comments" class="form-label">Comments (Optional)</label>
                        <textarea id="comments" name="comments" class="form-control form-control-lg @error('comments') is-invalid @enderror" rows="3" placeholder="Any additional message or comments" aria-describedby="commentsHelp">{{ old('comments', $shipment->comments) }}</textarea>
                        @error('comments')
                        <div class="invalid-feedback">{{ $message ?? 'Please enter valid comments.' }}</div>
                        @enderror
                        <small id="commentsHelp" class="form-text text-muted">You can leave a message for us here.</small>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-lg btn-primary w-100 mt-4 d-flex align-items-center justify-content-center" type="submit">
                        Update Shipment
                        <i class="ci-chevron-right fs-lg ms-2 me-n1"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
