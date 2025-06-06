<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Site Settings
    |--------------------------------------------------------------------------
    |
    | Core website configuration including brand information, contact details,
    | and global service descriptors for FlyPath Express.
    |
    */
    'site' => [
        'title' => 'FlyPath Express - Global Shipping & Logistics Solutions',
        'tagline' => 'Your Trusted Worldwide Logistics Partner',
        'description' => 'FlyPath Express delivers reliable, fast, and cost-effective shipping solutions across the globe. Our end-to-end logistics services ensure your shipments arrive safely and on time, every time. From air freight to ocean shipping, we connect your business to the world.',
        'email' => 'support@flypathexpress.com',
        'phone' => '(888)1234567',
        'address' => 'San Francisco, CA 94103, USA'
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Settings
    |--------------------------------------------------------------------------
    |
    | Configuration for email-related features in the admin panel.
    |
    */
    'email_notification' => true,    // Enable/disable all email notifications
    'email_provider' => 'phpmailer',      // Default mailer service to use for all emails
];
