<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ShipmentCreated;
use App\Mail\ShipmentNotification;
use App\Models\Shipment;
use App\Services\Geolocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Str;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.shipments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countriesResponse = Geolocation::handleLocationRequest('countries');
        $countries = $countriesResponse->getData(true)['data'] ?? [];

        return view('admin.shipments.create', [
            'countries' => $countries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $countriesResponse = Geolocation::handleLocationRequest('countries');
        $countries = array_map(function ($country) {
            return Str::snake($country['name']);
        }, $countriesResponse->getData(true)['data'] ?? []);

        $validated = $request->validate([
            'sender_name' => 'required|string|max:255',
            'sender_email' => 'required|email|max:255',
            'sender_address' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'receiver_email' => 'required|email|max:255',
            'receiver_address' => 'required|string|max:255',
            'origin' => ['required', Rule::in($countries)],
            'destination' => ['required', Rule::in($countries)],
            'shipment_type' => 'required|in:standard,express,overnight,international_shipping,local,air_freight,truckload,van_move,ocean_freight,road_freight',
            'payment_mode' => 'required|in:cash_on_delivery,credit_card,debit_card,bank_transfer,mobile_payment,paypal,check',
            'shipped_via' => 'required|string|max:255',
            'departure_date' => 'required|date|after_or_equal:today',
            'arrival_date' => 'required|date|after_or_equal:departure_date',
            'status' => 'required|in:pending,processing,shipped,in_transit,out_for_delivery,delivered,failed_delivery,held_by_customs,on_hold,awaiting_pickup,cancelled,returned,lost',
            'notify_receiver' => 'nullable|boolean',
            'comments' => 'nullable|string|max:1000',
        ]);

        // Generate unique tracking code
        $validated['tracking_code'] = Shipment::generateTrackingCode();

        // Store the shipment
        $shipment = Shipment::create($validated);

        // Send email to sender
        Mail::to($shipment->sender_email)->send(new ShipmentCreated($shipment));

        // Send notification to receiver if notify_receiver is checked
        if ($shipment->notify_receiver) {
            Mail::to($shipment->receiver_email)->send(new ShipmentNotification($shipment));
        }

        return redirect()->route('admin.shipments')->with('success', 'Shipment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipment $shipment)
    {
        //
    }
}
