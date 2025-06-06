<!DOCTYPE html>
<html>
<head>
    <title>Your Shipment Has Been Created - FlyPath Express</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #e1e1e1;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .shipment-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .detail-item {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .tracking-code {
            font-size: 18px;
            font-weight: bold;
            color: #0056b3;
            text-align: center;
            margin: 15px 0;
            padding: 10px;
            background-color: #f0f7ff;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Shipment Confirmation</h1>
    </div>
    
    <div class="content">
        <p>Dear {{ $shipment->sender_name }},</p>
        <p>Thank you for choosing FlyPath Express. Your shipment has been successfully created and is being processed.</p>
        
        <div class="tracking-code">
            Tracking Number: {{ $shipment->tracking_code }}
        </div>
        
        <div class="shipment-details">
            <h3>Shipment Details</h3>
            <div class="detail-item">
                <strong>Receiver:</strong> {{ $shipment->receiver_name }}
            </div>
            <div class="detail-item">
                <strong>Destination:</strong> {{ Str::title(str_replace('_', ' ', $shipment->destination)) }}
            </div>
            <div class="detail-item">
                <strong>Service Type:</strong> {{ Str::title(str_replace('_', ' ', $shipment->shipment_type)) }}
            </div>
            <div class="detail-item">
                <strong>Current Status:</strong> <span style="color: #0056b3;">{{ Str::title(str_replace('_', ' ', $shipment->status)) }}</span>
            </div>
            <div class="detail-item">
                <strong>Departure Date:</strong> {{ $shipment->departure_date->format('F j, Y') }}
            </div>
            <div class="detail-item">
                <strong>Estimated Arrival:</strong> {{ $shipment->arrival_date->format('F j, Y') }}
            </div>
        </div>
        
        <center>
            <a href="{{ route('tracking', ['tracking_code' => $shipment->tracking_code]) }}" class="button">
                Track Your Shipment
            </a>
        </center>
        
        <p>We'll notify you when your shipment status updates. If you have any questions, please contact our customer service.</p>
        
        <p>Best regards,<br>
        <strong>The FlyPath Express Team</strong></p>
        
        <div class="footer">
            <p>© {{ date('Y') }} FlyPath Express. All rights reserved.</p>
            <p>San Francisco, CA 94103, USA | support@flypathexpress.com | (888) 555-LOGI</p>
        </div>
    </div>
</body>
</html>