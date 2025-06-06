<!DOCTYPE html>
<html>
<head>
    <title>Incoming Shipment Notification - FlyPath Express</title>
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
            display: flex;
        }
        .detail-label {
            flex: 1;
            font-weight: bold;
            color: #555;
        }
        .detail-value {
            flex: 2;
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
        .status-badge {
            display: inline-block;
            padding: 3px 8px;
            background-color: #e1f5fe;
            color: #0056b3;
            border-radius: 12px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Incoming Shipment Notification</h1>
    </div>
    
    <div class="content">
        <p>Dear {{ $shipment->receiver_name }},</p>
        <p>We're pleased to inform you that a shipment is on its way to you via FlyPath Express.</p>
        
        <div class="tracking-code">
            Your Tracking Number: {{ $shipment->tracking_code }}
        </div>
        
        <div class="shipment-details">
            <h3 style="margin-top: 0; color: #0056b3;">Shipment Details</h3>
            <div class="detail-item">
                <div class="detail-label">Sender:</div>
                <div class="detail-value">{{ $shipment->sender_name }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Origin:</div>
                <div class="detail-value">{{ Str::title(str_replace('_', ' ', $shipment->origin)) }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Service Type:</div>
                <div class="detail-value">{{ Str::title(str_replace('_', ' ', $shipment->shipment_type)) }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Current Status:</div>
                <div class="detail-value"><span class="status-badge">{{ Str::title(str_replace('_', ' ', $shipment->status)) }}</span></div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Shipped On:</div>
                <div class="detail-value">{{ $shipment->departure_date->format('F j, Y') }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Estimated Delivery:</div>
                <div class="detail-value">{{ $shipment->arrival_date->format('F j, Y') }}</div>
            </div>
        </div>
        
        <center>
            <a href="{{ route('tracking', ['tracking_code' => $shipment->tracking_code]) }}" class="button">
                Track Your Package
            </a>
        </center>
        
        <p>You'll receive another notification when your shipment is out for delivery. If you have any questions about your delivery, please contact our customer service team.</p>
        
        <p>Best regards,<br>
        <strong>The FlyPath Express Team</strong></p>
        
        <div class="footer">
            <p>© {{ date('Y') }} FlyPath Express. All rights reserved.</p>
            <p>San Francisco, CA 94103, USA | support@flypathexpress.com | (888) 555-LOGI</p>
        </div>
    </div>
</body>
</html>