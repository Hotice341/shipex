<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_code')->unique();
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_address');
            $table->string('origin');
            $table->string('destination');
            $table->enum('shipment_type', [
                'standard',
                'express',
                'overnight',
                'international_shipping',
                'local',
                'air_freight',
                'truckload',
                'van_move',
                'ocean_freight',
                'road_freight'
            ]);
            $table->enum('payment_mode', [
                'cash_on_delivery',
                'credit_card',
                'debit_card',
                'bank_transfer',
                'mobile_payment',
                'paypal',
                'check'
            ]);
            $table->string('shipped_via');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->enum('status', [
                'pending',
                'processing',
                'shipped',
                'in_transit',
                'out_for_delivery',
                'delivered',
                'failed_delivery',
                'held_by_customs',
                'on_hold',
                'awaiting_pickup',
                'cancelled',
                'returned',
                'lost'
            ])->default('processing');
            $table->boolean('notify_receiver')->default(false);
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
