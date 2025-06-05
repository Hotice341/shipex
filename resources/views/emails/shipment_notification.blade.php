<!DOCTYPE html>
<html>
<head>
    <title>Shipment Notification</title>
</head>
<body>
<h1>Shipment Notification</h1>
<p>Dear {{ $shipment->receiver_name }},</p>
<p>A shipment is on its way to you with the following details:</p>
<ul>
    <li><strong>Tracking Code:</strong> {{ $shipment->tracking_code }}</li>
    <li><strong>Sender:</strong> {{ $shipment->sender_name }}</li>
    <li><strong>Origin:</strong> {{ Str::title(str_replace('_', ' ', $shipment->origin)) }}</li>
    <li><strong>Shipment Type:</strong> {{ Str::title(str_replace('_', ' ', $shipment->shipment_type)) }}</li>
    <li><strong>Status:</strong> {{ Str::title(str_replace('_', ' ', $shipment->status)) }}</li>
    <li><strong>Departure Date:</strong> {{ $shipment->departure_date->format('F j, Y') }}</li>
    <li><strong>Estimated Arrival:</strong> {{ $shipment->arrival_date->format('F j, Y') }}</li>
</ul>
<p>Please use the tracking code to monitor your shipment’s progress.</p>
<p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
