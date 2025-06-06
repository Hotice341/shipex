<!DOCTYPE html>
<html>
<head>
    <title>Test Email Notification - FlyPath Express</title>
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
        .test-info {
            background-color: #f0f7ff;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #0056b3;
        }
        .detail-item {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
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
        .success-badge {
            display: inline-block;
            padding: 5px 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Test Email Notification</h1>
    </div>
    
    <div class="content">
        <p>Hello Development Team,</p>
        
        <div class="test-info">
            <h3 style="margin-top: 0;">Test Notification Details</h3>
            <div class="detail-item">
                <strong>Test ID:</strong> #TEST-{{ strtoupper(uniqid()) }}
            </div>
            <div class="detail-item">
                <strong>Timestamp:</strong> {{ now()->format('Y-m-d H:i:s T') }}
            </div>
            <div class="detail-item">
                <strong>Environment:</strong> {{ config('app.env') }}
            </div>
            <div class="detail-item">
                <strong>Status:</strong> <span class="success-badge">TEST SUCCESSFUL</span>
            </div>
        </div>
        
        <p>This is a test email notification sent from the FlyPath Express notification system.</p>
        
        <p>If you received this email, it means:</p>
        <ul>
            <li>The email service is properly configured</li>
            <li>The template rendering is working correctly</li>
            <li>The system can successfully deliver notifications</li>
        </ul>
        
        <center>
            <a href="#" class="button">
                View Test Dashboard
            </a>
        </center>
        
        <p>You can safely ignore this message. This email was generated automatically for testing purposes.</p>
        
        <div class="footer">
            <p>© {{ date('Y') }} FlyPath Express. All rights reserved.</p>
            <p>Test Environment | Not a real notification</p>
        </div>
    </div>
</body>
</html>