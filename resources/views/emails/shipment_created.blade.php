<!DOCTYPE html>
<html>
<head>
    <title>Your Shipment Has Been Created</title>
</head>
<body>
<h1>Shipment Confirmation</h1>
<p>Dear {{ $shipment->sender_name }},</p>
<p>Your shipment has been successfully created with the following details:</p>
<ul>
    <li><strong>Tracking Code:</strong> {{ $shipment->tracking_code }}</li>
    <li><strong>Receiver:</strong> {{ $shipment->receiver_name }}</li>
    <li><strong>Destination:</strong> {{ Str::title(str_replace('_', ' ', $shipment->destination)) }}</li>
    <li><strong>Shipment Type:</strong> {{ Str::title(str_replace('_', ' ', $shipment->shipment_type)) }}</li>
    <li><strong>Status:</strong> {{ Str::title(str_replace('_', ' ', $shipment->status)) }}</li>
    <li><strong>Departure Date:</strong> {{ $shipment->departure_date->format('F j, Y') }}</li>
    <li><strong>Estimated Arrival:</strong> {{ $shipment->arrival_date->format('F j, Y') }}</li>
</ul>
<p>You can track your shipment using the tracking code provided.</p>
<p>Thank you for choosing our service!</p>
<p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
